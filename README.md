# *.cyb.no

Scriptet `index.php` (og derav `handler.php`) kalles for catch-all for
cyb.no, og lar oss gjøre redirects til andre sider.

## Deployment

Endringer i dette repoet for `master` branchen dyttes automatisk ut
på Cybs OpenBSD-server i NREC. Se
https://github.com/cybernetisk/redirect/actions

I GitHub har vi en secret `CYB_SSH_KEY` som inneholder en SSH-nøkkel
som kun benyttes av dette repoet, som er registrert i
`~puffy/.ssh/authorized_keys`.

