# `*.cyb.no`

Se [`REDIRECTS`](./REDIRECTS) filen for mapping over alle subdomener
og hvilke URL-er de redirecter til.

Dette oppsettet inneholder en server skrevet i
[Rust](https://www.rust-lang.org) som tar i mot requests og
sender redirect riktig steg.

## Deployment

Endringer i dette repoet for `master` branchen dyttes automatisk ut
i produksjon. Se https://github.com/cybernetisk/redirect/actions

I GitHub har vi en secret `CYB_SSH_KEY` som inneholder en SSH-nøkkel
som kun benyttes av dette repoet, som er registrert på produksjonsserveren.

TODO: Oppsett i prod.

TODO: Testserver?
