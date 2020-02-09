# *.cyb.no

Scriptet `index.php` kalles for catch-all for cyb.no, og lar oss gjøre
redirects til andre sider.

## Deployment

Endringer til `index.php` i `master` branchen dyttes automatisk ut
på Ifi sine webservere. Se https://github.com/cybernetisk/redirect/actions

I GitHub har vi en secret `CYB_SSH_KEY` som inneholder en SSH-nøkkel
som kun benyttes av dette repoet, som er registrert i
`~cyb/.ssh/authorized_keys`.

## Oppsett på cyb-brukeren

`~cyb/www_docs/.htaccess` må inneholde:

```htaccess
# Rewrite ALL OTHER REQUESTS for processing by the redirect script
RewriteCond %{HTTP_HOST} !^cyb\.no$
RewriteCond %{HTTP_HOST} \.cyb\.no$
RewriteRule ^(.*)$ /redirect/index.php [L,NC]
```

`~cyb/www_docs/redirect` er symlink til `../automation/github-redirect`,
som igjen er mappen vi kopierer disse filene til.
