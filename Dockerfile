FROM alpine:3.11

COPY target/x86_64-unknown-linux-musl/release/redirect /server
COPY mappings.json /mappings.json

WORKDIR /
CMD ["/server"]

EXPOSE 8088
