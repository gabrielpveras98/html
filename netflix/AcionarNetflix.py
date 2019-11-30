import os

a = os.system

a('chromium-browser --no-default-browser-check --user-agent="Moa/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2114.2 Safari/537.36" --user-data-dir=/$HOME/.config/netflix --app=http://netflix.com/br')
