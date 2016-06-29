# expressiveapi

```
expressive-api ❯❯❯ docker run -it --rm --net=expressiveapi_default ilumin/wrk -t12 -c400 -d30s http://172.19.0.3/test-param/ilumin
	Running 30s test @ http://172.19.0.3/test-param/ilumin
	  12 threads and 400 connections
	  Thread Stats   Avg      Stdev     Max   +/- Stdev
	    Latency   986.27ms  505.25ms   2.00s    66.10%
	    Req/Sec    20.73     16.77   192.00     80.18%
	  5589 requests in 30.09s, 1.22MB read
	  Socket errors: connect 0, read 0, write 0, timeout 795
	  Non-2xx or 3xx responses: 16
	Requests/sec:    185.77
	Transfer/sec:     41.60KB
```
