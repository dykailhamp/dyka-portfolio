#!/usr/bin/env bash
set -euo pipefail

base_path="/dyka-portfolio"
output_dir="dist"
server_port="8787"
base_url="http://127.0.0.1:${server_port}"

rm -rf "$output_dir"
mkdir -p "$output_dir/about" "$output_dir/portfolio/genpro-apps" "$output_dir/portfolio/bakso-pak-eko" "$output_dir/portfolio/tuku-tiket-dolan"

php artisan serve --host=127.0.0.1 --port="$server_port" >/tmp/dyka-laravel.log 2>&1 &
server_pid=$!
trap 'kill "$server_pid"' EXIT

for attempt in {1..20}; do
    if curl --silent --fail "$base_url/" >/dev/null; then
        break
    fi
    sleep 1
done

curl --show-error --fail "$base_url/" > "$output_dir/index.html"
curl --show-error --fail "$base_url/about" > "$output_dir/about/index.html"
curl --show-error --fail "$base_url/portfolio/genpro-apps" > "$output_dir/portfolio/genpro-apps/index.html"
curl --show-error --fail "$base_url/portfolio/bakso-pak-eko" > "$output_dir/portfolio/bakso-pak-eko/index.html"
curl --show-error --fail "$base_url/portfolio/tuku-tiket-dolan" > "$output_dir/portfolio/tuku-tiket-dolan/index.html"

cp -R public/images "$output_dir/images"
cp -R public/build "$output_dir/build"

find "$output_dir" -name '*.html' -print0 | xargs -0 sed -i \
    -e "s#href=\"/build/#href=\"${base_path}/build/#g" \
    -e "s#src=\"/build/#src=\"${base_path}/build/#g" \
    -e "s#href=\"/images/#href=\"${base_path}/images/#g" \
    -e "s#src=\"/images/#src=\"${base_path}/images/#g" \
    -e "s#href=\"/about\"#href=\"${base_path}/about/\"#g" \
    -e "s#href=\"/\"#href=\"${base_path}/\"#g" \
    -e "s#href=\"/portfolio/#href=\"${base_path}/portfolio/#g"
    -e "s#http://localhost${base_path}#${base_path}#g" \
    -e "s#http://localhost#${base_path}#g"

touch "$output_dir/.nojekyll"
