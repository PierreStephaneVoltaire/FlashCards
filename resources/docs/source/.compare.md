---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_9031729176c8de9ae597948c0e0b3cc1 -->
## words
> Example request:

```bash
curl -X GET \
    -G "http://localhost/words" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/words"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "english": "ku",
        "hiragana": "く",
        "isChar": 1
    }
]
```

### HTTP Request
`GET words`


<!-- END_9031729176c8de9ae597948c0e0b3cc1 -->

<!-- START_70162d0e94cecd7bd84dd50cd431cc01 -->
## words
> Example request:

```bash
curl -X POST \
    "http://localhost/words" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/words"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST words`


<!-- END_70162d0e94cecd7bd84dd50cd431cc01 -->


