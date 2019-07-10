## Device Detector microservice server.

# Install

```
git clone git@github.com:OmarMakled/device-detector-server.git
cd device-detector-server
docker run --rm -v $(pwd):/app composer install
docker-compose up
```

# Test

```
docker exec -ti device-detector /bin/bash
cd /device-detector
vendor/bin/phpunit
```

# Run

http://localhost:8080/
