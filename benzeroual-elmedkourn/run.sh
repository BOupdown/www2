rm db.sqlite

touch db.sqlite
cat sql/oasis.sql | sqlite3 db.sqlite
cat sql/oasis_data.sql | sqlite3 db.sqlite

php -c php.ini -S localhost:8080

