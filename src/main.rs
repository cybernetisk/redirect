use actix_web::{http, web, App, HttpRequest, HttpResponse, HttpServer, Responder};
use serde::{Deserialize, Serialize};
use std::collections::HashMap;
use std::fs;

async fn index(req: HttpRequest, data: web::Data<AppState>) -> impl Responder {
    let host_value = req
        .headers()
        .get(http::header::HOST)
        .map(|v| std::str::from_utf8(v.as_bytes()).expect("Missing HOST header"))
        .unwrap_or("");

    println!("Got request for '{}'", host_value);

    HttpResponse::Found()
        .header(
            http::header::LOCATION,
            data.mapping_data.lookup(&host_value),
        )
        .finish()
}

#[derive(Serialize, Deserialize, Clone)]
struct MappingData {
    default: String,
    mappings: HashMap<String, String>,
}

impl MappingData {
    fn lookup(&self, value: &str) -> &str {
        self.mappings
            .get(&value.to_string())
            .unwrap_or(&self.default)
    }
}

fn load_mapping() -> MappingData {
    serde_json::from_str(
        &fs::read_to_string("mappings.json").expect("Something went wrong reading the file"),
    )
    .expect("Deserialize failed")
}

struct AppState {
    mapping_data: MappingData,
}

#[actix_rt::main]
async fn main() -> std::io::Result<()> {
    HttpServer::new(|| {
        App::new()
            .data(AppState {
                mapping_data: load_mapping(),
            })
            .route("/", web::get().to(index))
    })
    .bind("0.0.0.0:8088")?
    .run()
    .await
}
