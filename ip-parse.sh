awk '{print $2}' /var/nginx/log/access.log | sort | uniq -c | tee /tmp/nginx-proxy-ips
