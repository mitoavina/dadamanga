# Modifier .htaccess
Commenter:
RewriteBase /
RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]

et mettre CI en development

# Développer en React
npx babel --watch react/src --out-dir react/dist --presets react-app/prod


## Dashboard Blog
### Mode dev
Changer SERVER_URL
Changer la version production de React en development

### Mode prod
Faire l'inverse


## Dashboard Travefy