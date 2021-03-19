# POC  for issue #2299

To reproduce issue <https://github.com/FriendsOfSymfony/FOSRestBundle/issues/2299>

```bash
echo "APP_ENV=prod\nAPP_DEBUG=false\n" > .env.local
composer install -a -o
bin/console cache:clear
bin/console cache:warmup
bin/console router:match /service/index
```
