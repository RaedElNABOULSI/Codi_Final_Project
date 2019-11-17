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

#BestGoal Videos management


APIs for managing bestgoal videos
<!-- START_8e5eab585577701e0213629489483e95 -->
## Display goals

> Example request:

```bash
curl -X GET -G "http://localhost/api/bestgoal" 
```

```javascript
const url = new URL("http://localhost/api/bestgoal");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "id": 14,
        "footclick_name": "Son",
        "image": "1573770065.jpeg",
        "created_at": "2019-11-14 22:21:05",
        "updated_at": "2019-11-14 22:21:05"
    }
]
```

### HTTP Request
`GET api/bestgoal`


<!-- END_8e5eab585577701e0213629489483e95 -->

<!-- START_3e0e2501e0e3ca9bf965bb8979ff078c -->
## Create a new video goal

> Example request:

```bash
curl -X POST "http://localhost/api/bestgoal" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"sed"}'

```

```javascript
const url = new URL("http://localhost/api/bestgoal");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "sed"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/bestgoal`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_3e0e2501e0e3ca9bf965bb8979ff078c -->

<!-- START_71327b66ca3fa930ae20725ddf2153ad -->
## Update a video goal

> Example request:

```bash
curl -X PUT "http://localhost/api/bestgoal/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"nihil","\\Illuminate\\Http\\Request":"corrupti"}'

```

```javascript
const url = new URL("http://localhost/api/bestgoal/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "nihil",
    "\\Illuminate\\Http\\Request": "corrupti"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/bestgoal/{bestgoal}`

`PATCH api/bestgoal/{bestgoal}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_71327b66ca3fa930ae20725ddf2153ad -->

<!-- START_ccf7c69ccf400b07016afe55313b1610 -->
## Remove a video goal

> Example request:

```bash
curl -X DELETE "http://localhost/api/bestgoal/1" \
    -H "Content-Type: application/json" \
    -d '{"\\int":"unde"}'

```

```javascript
const url = new URL("http://localhost/api/bestgoal/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\int": "unde"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/bestgoal/{bestgoal}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \int | $id |  optional  | 

<!-- END_ccf7c69ccf400b07016afe55313b1610 -->

#Football Position management


APIs for managing positions
<!-- START_ae542a09719e376f404b4dbbe62d4843 -->
## Display football positions

> Example request:

```bash
curl -X GET -G "http://localhost/api/position" 
```

```javascript
const url = new URL("http://localhost/api/position");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "position": "Goalkeeper"
    },
    {
        "id": 2,
        "position": "Defender"
    },
    {
        "id": 3,
        "position": "Midfielder"
    },
    {
        "id": 4,
        "position": "Attacker"
    },
    {
        "id": 5,
        "position": "Any"
    }
]
```

### HTTP Request
`GET api/position`


<!-- END_ae542a09719e376f404b4dbbe62d4843 -->

<!-- START_912cf5f42f8a439590b0d6c36933b7fe -->
## Create a new position

> Example request:

```bash
curl -X POST "http://localhost/api/position" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"quae","position":"totam"}'

```

```javascript
const url = new URL("http://localhost/api/position");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "quae",
    "position": "totam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/position`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \Illuminate\Http\Request | $request |  optional  | 
    position | \Illuminate\Http\Request |  required  | Position

<!-- END_912cf5f42f8a439590b0d6c36933b7fe -->

<!-- START_2ede7c8d75017caba13682f1ad1ebd67 -->
## Update a position

> Example request:

```bash
curl -X PUT "http://localhost/api/position/1" \
    -H "Content-Type: application/json" \
    -d '{"$id":19,"\\Illuminate\\Http\\Request":"qui","position":"beatae"}'

```

```javascript
const url = new URL("http://localhost/api/position/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 19,
    "\\Illuminate\\Http\\Request": "qui",
    "position": "beatae"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/position/{position}`

`PATCH api/position/{position}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 
    position | \Illuminate\Http\Request |  required  | Position

<!-- END_2ede7c8d75017caba13682f1ad1ebd67 -->

<!-- START_69954f900497a9167006affd061f5784 -->
## Remove a position

> Example request:

```bash
curl -X DELETE "http://localhost/api/position/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"quia"}'

```

```javascript
const url = new URL("http://localhost/api/position/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "quia"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/position/{position}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  optional  | 

<!-- END_69954f900497a9167006affd061f5784 -->

#Goal Videos management


APIs for uploading videos
<!-- START_cff4c0240954ebf2710488990c42ff11 -->
## Upload a Goal Footage

> Example request:

```bash
curl -X POST "http://localhost/api/fileupload" \
    -H "Content-Type: application/json" \
    -d '{"$request":"harum","$image":"voluptates","$fname":"amet","$name":"minima"}'

```

```javascript
const url = new URL("http://localhost/api/fileupload");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "harum",
    "$image": "voluptates",
    "$fname": "amet",
    "$name": "minima"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/fileupload`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | \Illuminate\Http\Request |  optional  | 
    $image | \Illuminate\Http\Request |  required  | Get file
    $fname | \Illuminate\Http\Request |  required  | Username
    $name | \Illuminate\Http\Request |  required  | File name to be stored in public folder

<!-- END_cff4c0240954ebf2710488990c42ff11 -->

#Host Team management


APIs for managing Hosts
<!-- START_23b8a30e3fcbaa3e105052ed8792beeb -->
## Display all hosts

> Example request:

```bash
curl -X GET -G "http://localhost/api/hostteam" 
```

```javascript
const url = new URL("http://localhost/api/hostteam");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "no_of_players": 4,
        "team_name": "Evolution FC",
        "age_min": 30,
        "age_max": 50,
        "footclick_name": "Son",
        "location": "Beirut",
        "position": "Attacker"
    },
    {
        "no_of_players": 2,
        "team_name": "Streak FC",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "Beirut",
        "position": "Goalkeeper"
    },
    {
        "no_of_players": 2,
        "team_name": "sd",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "Beirut",
        "position": "Any"
    },
    {
        "no_of_players": 2,
        "team_name": "sd",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "Beirut",
        "position": "Any"
    },
    {
        "no_of_players": 2,
        "team_name": "sd",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "Beirut",
        "position": "Any"
    },
    {
        "no_of_players": 2,
        "team_name": "sd",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "Beirut",
        "position": "Any"
    },
    {
        "no_of_players": 5,
        "team_name": "test",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "Beirut",
        "position": "Defender"
    },
    {
        "no_of_players": 3,
        "team_name": "Great FC",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 3,
        "team_name": "Hello FC",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 4,
        "team_name": "dv",
        "age_min": 10,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 3,
        "team_name": "hey FC",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 3,
        "team_name": "kxn",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 1,
        "team_name": "sf",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 1,
        "team_name": "sf",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Attacker"
    },
    {
        "no_of_players": 1,
        "team_name": "sf",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Any"
    },
    {
        "no_of_players": 1,
        "team_name": "sf",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Any"
    },
    {
        "no_of_players": 4,
        "team_name": "yes",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Skriniar",
        "location": "North Lebanon",
        "position": "Any"
    },
    {
        "no_of_players": 2,
        "team_name": "United FC",
        "age_min": 20,
        "age_max": 40,
        "footclick_name": "Berbatov",
        "location": "South Lebanon",
        "position": "Goalkeeper"
    },
    {
        "no_of_players": 4,
        "team_name": "City FC",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Fabinho",
        "location": "Mount Lebanon",
        "position": "Midfielder"
    },
    {
        "no_of_players": 1,
        "team_name": "Liverpool FC",
        "age_min": 20,
        "age_max": 50,
        "footclick_name": "Fabinho",
        "location": "Bekaa",
        "position": "Defender"
    }
]
```

### HTTP Request
`GET api/hostteam`


<!-- END_23b8a30e3fcbaa3e105052ed8792beeb -->

<!-- START_fce1c380985a79c330ad13fad7217a03 -->
## Create a new host

> Example request:

```bash
curl -X POST "http://localhost/api/hostteam" 
```

```javascript
const url = new URL("http://localhost/api/hostteam");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/hostteam`


<!-- END_fce1c380985a79c330ad13fad7217a03 -->

<!-- START_f0a707d1e2eac7bc2f610a89d1775cd9 -->
## Update a host

> Example request:

```bash
curl -X PUT "http://localhost/api/hostteam/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"necessitatibus"}'

```

```javascript
const url = new URL("http://localhost/api/hostteam/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "necessitatibus"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/hostteam/{hostteam}`

`PATCH api/hostteam/{hostteam}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  optional  | 

<!-- END_f0a707d1e2eac7bc2f610a89d1775cd9 -->

<!-- START_54bc9eb0318376138eac7555fd991fbe -->
## Remove a host

> Example request:

```bash
curl -X DELETE "http://localhost/api/hostteam/1" 
```

```javascript
const url = new URL("http://localhost/api/hostteam/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/hostteam/{hostteam}`


<!-- END_54bc9eb0318376138eac7555fd991fbe -->

#Host requested position relations management


APIs for managing Host requested position relations
<!-- START_b72779f685a6629a69b08055bc917ad1 -->
## Display all host requested positions

> Example request:

```bash
curl -X GET -G "http://localhost/api/hostreqposition" 
```

```javascript
const url = new URL("http://localhost/api/hostreqposition");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "id": 3,
        "host_id": 4,
        "position_id": 1
    },
    {
        "id": 4,
        "host_id": 5,
        "position_id": 4
    },
    {
        "id": 5,
        "host_id": 6,
        "position_id": 2
    },
    {
        "id": 6,
        "host_id": 7,
        "position_id": 3
    },
    {
        "id": 7,
        "host_id": 8,
        "position_id": 1
    },
    {
        "id": 8,
        "host_id": 9,
        "position_id": 4
    },
    {
        "id": 9,
        "host_id": 10,
        "position_id": 4
    },
    {
        "id": 10,
        "host_id": 11,
        "position_id": 4
    },
    {
        "id": 11,
        "host_id": 12,
        "position_id": 4
    },
    {
        "id": 12,
        "host_id": 13,
        "position_id": 4
    },
    {
        "id": 13,
        "host_id": 16,
        "position_id": 5
    },
    {
        "id": 14,
        "host_id": 17,
        "position_id": 4
    },
    {
        "id": 15,
        "host_id": 16,
        "position_id": 5
    },
    {
        "id": 16,
        "host_id": 19,
        "position_id": 2
    },
    {
        "id": 17,
        "host_id": 20,
        "position_id": 5
    },
    {
        "id": 18,
        "host_id": 17,
        "position_id": 5
    }
]
```

### HTTP Request
`GET api/hostreqposition`


<!-- END_b72779f685a6629a69b08055bc917ad1 -->

<!-- START_b1e059f2f4bcbc425c3d7cc67e562dd3 -->
## Store a new host requested position

> Example request:

```bash
curl -X POST "http://localhost/api/hostreqposition" 
```

```javascript
const url = new URL("http://localhost/api/hostreqposition");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/hostreqposition`


<!-- END_b1e059f2f4bcbc425c3d7cc67e562dd3 -->

<!-- START_a98b501f16b005548ead2b686d496e8b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/hostreqposition/1" 
```

```javascript
const url = new URL("http://localhost/api/hostreqposition/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/hostreqposition/{hostreqposition}`


<!-- END_a98b501f16b005548ead2b686d496e8b -->

<!-- START_a4ec6bcf9a2afd0acb144f5edaa9d7d3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/hostreqposition/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/hostreqposition/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/hostreqposition/{hostreqposition}/edit`


<!-- END_a4ec6bcf9a2afd0acb144f5edaa9d7d3 -->

<!-- START_bf6da3525c486daf828ac2d7bf322638 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/hostreqposition/1" 
```

```javascript
const url = new URL("http://localhost/api/hostreqposition/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/hostreqposition/{hostreqposition}`

`PATCH api/hostreqposition/{hostreqposition}`


<!-- END_bf6da3525c486daf828ac2d7bf322638 -->

<!-- START_97128a5a086bc7f16a517e6e9930229c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/hostreqposition/1" 
```

```javascript
const url = new URL("http://localhost/api/hostreqposition/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/hostreqposition/{hostreqposition}`


<!-- END_97128a5a086bc7f16a517e6e9930229c -->

#Location management


APIs for managing locations
<!-- START_b304d8a5ba91fce59e5bcd210ea5d53e -->
## Display all Locations

> Example request:

```bash
curl -X GET -G "http://localhost/api/location" 
```

```javascript
const url = new URL("http://localhost/api/location");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "id": 3,
        "location": "Beirut",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 4,
        "location": "North Lebanon",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 5,
        "location": "South Lebanon",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 6,
        "location": "Mount Lebanon",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 7,
        "location": "Bekaa",
        "created_at": null,
        "updated_at": null
    }
]
```

### HTTP Request
`GET api/location`


<!-- END_b304d8a5ba91fce59e5bcd210ea5d53e -->

<!-- START_f5462d9db30f96861f4f9153cc759d23 -->
## Store a new location

> Example request:

```bash
curl -X POST "http://localhost/api/location" 
```

```javascript
const url = new URL("http://localhost/api/location");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/location`


<!-- END_f5462d9db30f96861f4f9153cc759d23 -->

<!-- START_26301b7a8b0dff0425a34bb7a293bea8 -->
## Display a location

> Example request:

```bash
curl -X GET -G "http://localhost/api/location/1" 
```

```javascript
const url = new URL("http://localhost/api/location/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/location/{location}`


<!-- END_26301b7a8b0dff0425a34bb7a293bea8 -->

<!-- START_29a0803630f8c8cdea6d646f16316f39 -->
## Update a location

> Example request:

```bash
curl -X PUT "http://localhost/api/location/1" 
```

```javascript
const url = new URL("http://localhost/api/location/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/location/{location}`

`PATCH api/location/{location}`


<!-- END_29a0803630f8c8cdea6d646f16316f39 -->

<!-- START_4ccfbc8c44394bf0b00ed6ff3255329f -->
## Remove a location

> Example request:

```bash
curl -X DELETE "http://localhost/api/location/1" 
```

```javascript
const url = new URL("http://localhost/api/location/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/location/{location}`


<!-- END_4ccfbc8c44394bf0b00ed6ff3255329f -->

#Player Match Request management


APIs for managing match requests
<!-- START_b7d115c46fa9f5ad2e2eb3e07e7e98f9 -->
## Display a match request

> Example request:

```bash
curl -X GET -G "http://localhost/api/matchreq" 
```

```javascript
const url = new URL("http://localhost/api/matchreq");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/matchreq`


<!-- END_b7d115c46fa9f5ad2e2eb3e07e7e98f9 -->

<!-- START_292402b32a29ad59a7d173bbea93eacc -->
## Store a new match request

> Example request:

```bash
curl -X POST "http://localhost/api/matchreq" \
    -H "Content-Type: application/json" \
    -d '{"status":"voluptatum","req_host_id":"eveniet","ack_host_id":"sed","winning_host_id":"velit"}'

```

```javascript
const url = new URL("http://localhost/api/matchreq");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "status": "voluptatum",
    "req_host_id": "eveniet",
    "ack_host_id": "sed",
    "winning_host_id": "velit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/matchreq`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    status | \Illuminate\Http\Request |  required  | Match request status
    req_host_id | \Illuminate\Http\Request |  required  | Match request Requested user id
    ack_host_id | \Illuminate\Http\Request |  required  | Match request acknowledged user id
    winning_host_id | \Illuminate\Http\Request |  required  | Match request status winning user id

<!-- END_292402b32a29ad59a7d173bbea93eacc -->

<!-- START_7b11cfbf1d7ae95ca27cebf96a295e7c -->
## Update a match request

> Example request:

```bash
curl -X PUT "http://localhost/api/matchreq/1" \
    -H "Content-Type: application/json" \
    -d '{"status":"architecto","req_host_id":"saepe","ack_host_id":"sit","winning_host_id":"aliquam"}'

```

```javascript
const url = new URL("http://localhost/api/matchreq/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "status": "architecto",
    "req_host_id": "saepe",
    "ack_host_id": "sit",
    "winning_host_id": "aliquam"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/matchreq/{matchreq}`

`PATCH api/matchreq/{matchreq}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    status | \Illuminate\Http\Request |  required  | Match request status
    req_host_id | \Illuminate\Http\Request |  required  | Match request Requested user id
    ack_host_id | \Illuminate\Http\Request |  required  | Match request acknowledged user id
    winning_host_id | \Illuminate\Http\Request |  required  | Match request status winning user id

<!-- END_7b11cfbf1d7ae95ca27cebf96a295e7c -->

<!-- START_54426b662047873f257a06cbe90759d4 -->
## Remove a match request

> Example request:

```bash
curl -X DELETE "http://localhost/api/matchreq/1" 
```

```javascript
const url = new URL("http://localhost/api/matchreq/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/matchreq/{matchreq}`


<!-- END_54426b662047873f257a06cbe90759d4 -->

#Player Position relation management


APIs for managing player position relations
<!-- START_35b12c59d75cb53c870be86162948b9b -->
## Display a player position relation

> Example request:

```bash
curl -X GET -G "http://localhost/api/playerposition" 
```

```javascript
const url = new URL("http://localhost/api/playerposition");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "id": 26,
        "position_id": 4,
        "player_id": 34
    },
    {
        "id": 27,
        "position_id": 1,
        "player_id": 35
    },
    {
        "id": 28,
        "position_id": 2,
        "player_id": 36
    },
    {
        "id": 29,
        "position_id": 3,
        "player_id": 37
    },
    {
        "id": 30,
        "position_id": 4,
        "player_id": 38
    }
]
```

### HTTP Request
`GET api/playerposition`


<!-- END_35b12c59d75cb53c870be86162948b9b -->

<!-- START_717d770a7908d9f2d3a803de135fce0d -->
## Store a new player position relation

> Example request:

```bash
curl -X POST "http://localhost/api/playerposition" \
    -H "Content-Type: application/json" \
    -d '{"position_id":"tempore","player_id":"voluptatem"}'

```

```javascript
const url = new URL("http://localhost/api/playerposition");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "position_id": "tempore",
    "player_id": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/playerposition`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    position_id | \Illuminate\Http\Request |  required  | Position id
    player_id | \Illuminate\Http\Request |  required  | Player id

<!-- END_717d770a7908d9f2d3a803de135fce0d -->

<!-- START_cf828b2aae6e1644dea7553fee7b0513 -->
## Update a player position relation

> Example request:

```bash
curl -X PUT "http://localhost/api/playerposition/1" \
    -H "Content-Type: application/json" \
    -d '{"position_id":"sit","player_id":"voluptas"}'

```

```javascript
const url = new URL("http://localhost/api/playerposition/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "position_id": "sit",
    "player_id": "voluptas"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/playerposition/{playerposition}`

`PATCH api/playerposition/{playerposition}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    position_id | \Illuminate\Http\Request |  required  | Position id
    player_id | \Illuminate\Http\Request |  required  | Player id

<!-- END_cf828b2aae6e1644dea7553fee7b0513 -->

<!-- START_457aa639731d83f8ec9fe33f11375e94 -->
## Remove a player position relation

> Example request:

```bash
curl -X DELETE "http://localhost/api/playerposition/1" 
```

```javascript
const url = new URL("http://localhost/api/playerposition/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/playerposition/{playerposition}`


<!-- END_457aa639731d83f8ec9fe33f11375e94 -->

#Player Trait relation management


APIs for managing player trait relations
<!-- START_b604d47382e9fa57875b43d1fc439ad8 -->
## Display a playerTrait

> Example request:

```bash
curl -X GET -G "http://localhost/api/playertrait" 
```

```javascript
const url = new URL("http://localhost/api/playertrait");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "id": 20,
        "player_id": 34,
        "trait_id": 2
    },
    {
        "id": 21,
        "player_id": 35,
        "trait_id": 5
    },
    {
        "id": 22,
        "player_id": 36,
        "trait_id": 4
    },
    {
        "id": 23,
        "player_id": 37,
        "trait_id": 3
    },
    {
        "id": 24,
        "player_id": 38,
        "trait_id": 6
    }
]
```

### HTTP Request
`GET api/playertrait`


<!-- END_b604d47382e9fa57875b43d1fc439ad8 -->

<!-- START_8ab6c1bc856602490ae45ac5a11e1c0e -->
## Store a new playerTrait

> Example request:

```bash
curl -X POST "http://localhost/api/playertrait" \
    -H "Content-Type: application/json" \
    -d '{"player_id":"soluta","trait_id":"facere"}'

```

```javascript
const url = new URL("http://localhost/api/playertrait");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "player_id": "soluta",
    "trait_id": "facere"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/playertrait`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    player_id | \Illuminate\Http\Request |  required  | Player id
    trait_id | \Illuminate\Http\Request |  required  | Trait id

<!-- END_8ab6c1bc856602490ae45ac5a11e1c0e -->

<!-- START_f8dd43c5462bc6336f357de473ffb57a -->
## Update a playerTrait

> Example request:

```bash
curl -X PUT "http://localhost/api/playertrait/1" 
```

```javascript
const url = new URL("http://localhost/api/playertrait/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/playertrait/{playertrait}`

`PATCH api/playertrait/{playertrait}`


<!-- END_f8dd43c5462bc6336f357de473ffb57a -->

<!-- START_f1f8bcd571d453f9a049d619eab1aba4 -->
## Remove a playerTrait

> Example request:

```bash
curl -X DELETE "http://localhost/api/playertrait/1" 
```

```javascript
const url = new URL("http://localhost/api/playertrait/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/playertrait/{playertrait}`


<!-- END_f1f8bcd571d453f9a049d619eab1aba4 -->

#Stadium management


APIs for managing stadiums
<!-- START_31a992e42e71348dd97dd728c2dc42a1 -->
## Display stadiums

> Example request:

```bash
curl -X GET -G "http://localhost/api/stadium" 
```

```javascript
const url = new URL("http://localhost/api/stadium");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "name": "Fairplay",
        "image": "https:\/\/sh-prod-storage.s3.amazonaws.com\/uploads\/image\/image\/3415\/big_DSCF2788.jpg",
        "capacity": 10,
        "region": "Beirut",
        "price": 25,
        "added on": "2019-10-10 11:25:13"
    },
    {
        "id": 2,
        "name": "Fitnessgo",
        "image": "https:\/\/upload.wikimedia.org\/wikipedia\/commons\/3\/33\/Manchester_United_Panorama_%288051523746%29.jpg",
        "capacity": 12,
        "region": "Jbeil",
        "price": 30,
        "added on": "2019-10-10 11:25:13"
    },
    {
        "id": 3,
        "name": "Energy",
        "image": "https:\/\/static.barcelona.com\/var\/plain\/storage\/images\/barcelona_tickets\/fc_barcelona_football_tickets\/camp_nou_guided_tour\/camp_nou_tour_skip_the_line_tickets\/10217825-1-eng-GB\/camp_nou_tour_skip_the_line_tickets_block-selection.jpg",
        "capacity": 10,
        "region": "Beirut",
        "price": 25,
        "added on": "2019-10-10 11:25:13"
    }
]
```

### HTTP Request
`GET api/stadium`


<!-- END_31a992e42e71348dd97dd728c2dc42a1 -->

<!-- START_a980268f60e5292e81460f13b9710f1e -->
## Create a new stadium

> Example request:

```bash
curl -X POST "http://localhost/api/stadium" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"ullam","name":"veniam","image":"aut","capacity":"odit","region":"optio","price":"quidem"}'

```

```javascript
const url = new URL("http://localhost/api/stadium");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "ullam",
    "name": "veniam",
    "image": "aut",
    "capacity": "odit",
    "region": "optio",
    "price": "quidem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/stadium`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \Illuminate\Http\Request | $request |  optional  | 
    name | \Illuminate\Http\Request |  required  | Stadium Name
    image | \Illuminate\Http\Request |  required  | Stadium Image
    capacity | \Illuminate\Http\Request |  required  | Stadium Capacity
    region | \Illuminate\Http\Request |  required  | Stadium Region
    price | \Illuminate\Http\Request |  required  | Stadium Price

<!-- END_a980268f60e5292e81460f13b9710f1e -->

<!-- START_805d6e66e1a9b571ed7369ca8b7dd9dc -->
## Update a stadium

> Example request:

```bash
curl -X PUT "http://localhost/api/stadium/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"qui","\\Illuminate\\Http\\Request":"fuga","name":"aliquid","image":"distinctio","capacity":"explicabo","region":"et","price":"qui"}'

```

```javascript
const url = new URL("http://localhost/api/stadium/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "qui",
    "\\Illuminate\\Http\\Request": "fuga",
    "name": "aliquid",
    "image": "distinctio",
    "capacity": "explicabo",
    "region": "et",
    "price": "qui"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/stadium/{stadium}`

`PATCH api/stadium/{stadium}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 
    name | \Illuminate\Http\Request |  required  | Stadium Name
    image | \Illuminate\Http\Request |  required  | Stadium Image
    capacity | \Illuminate\Http\Request |  required  | Stadium Capacity
    region | \Illuminate\Http\Request |  required  | Stadium Region
    price | \Illuminate\Http\Request |  required  | Stadium Price

<!-- END_805d6e66e1a9b571ed7369ca8b7dd9dc -->

<!-- START_01bf023a62d9fe3039546aeeb12e96e1 -->
## Remove a stadium

> Example request:

```bash
curl -X DELETE "http://localhost/api/stadium/1" \
    -H "Content-Type: application/json" \
    -d '{"$id":9}'

```

```javascript
const url = new URL("http://localhost/api/stadium/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 9
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/stadium/{stadium}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | 

<!-- END_01bf023a62d9fe3039546aeeb12e96e1 -->

<!-- START_db6860061b5fdd082d1e317feef5698f -->
## Filter stadiums according to capacity and/or price

> Example request:

```bash
curl -X GET -G "http://localhost/api/filter_sort" \
    -H "Content-Type: application/json" \
    -d '{"$capacity":"in","$order":"accusantium"}'

```

```javascript
const url = new URL("http://localhost/api/filter_sort");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$capacity": "in",
    "$order": "accusantium"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Fairplay",
        "image": "https:\/\/sh-prod-storage.s3.amazonaws.com\/uploads\/image\/image\/3415\/big_DSCF2788.jpg",
        "capacity": 10,
        "region": "Beirut",
        "price": 25,
        "added on": "2019-10-10 11:25:13"
    },
    {
        "id": 2,
        "name": "Fitnessgo",
        "image": "https:\/\/upload.wikimedia.org\/wikipedia\/commons\/3\/33\/Manchester_United_Panorama_%288051523746%29.jpg",
        "capacity": 12,
        "region": "Jbeil",
        "price": 30,
        "added on": "2019-10-10 11:25:13"
    },
    {
        "id": 3,
        "name": "Energy",
        "image": "https:\/\/static.barcelona.com\/var\/plain\/storage\/images\/barcelona_tickets\/fc_barcelona_football_tickets\/camp_nou_guided_tour\/camp_nou_tour_skip_the_line_tickets\/10217825-1-eng-GB\/camp_nou_tour_skip_the_line_tickets_block-selection.jpg",
        "capacity": 10,
        "region": "Beirut",
        "price": 25,
        "added on": "2019-10-10 11:25:13"
    }
]
```

### HTTP Request
`GET api/filter_sort`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $capacity | \Illuminate\Http\Request |  required  | Stadium capacity
    $order | \Illuminate\Http\Request |  required  | Stadium priceOrder

<!-- END_db6860061b5fdd082d1e317feef5698f -->

#Team Requests management


APIs for managing team requests
<!-- START_6b8d4bcded314c900648c419cc434714 -->
## Display team requests

> Example request:

```bash
curl -X GET -G "http://localhost/api/teamreq" 
```

```javascript
const url = new URL("http://localhost/api/teamreq");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/teamreq`


<!-- END_6b8d4bcded314c900648c419cc434714 -->

<!-- START_b9feff0da937a43b09bd6c4fd2e619dc -->
## Create a new team request

> Example request:

```bash
curl -X POST "http://localhost/api/teamreq" \
    -H "Content-Type: application/json" \
    -d '{"status":"sit","type":"velit","player_id":"non","host_id":"hic"}'

```

```javascript
const url = new URL("http://localhost/api/teamreq");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "status": "sit",
    "type": "velit",
    "player_id": "non",
    "host_id": "hic"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/teamreq`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    status | \Illuminate\Http\Request |  required  | Request status
    type | \Illuminate\Http\Request |  required  | Request type
    player_id | \Illuminate\Http\Request |  required  | Request Player requested id
    host_id | \Illuminate\Http\Request |  required  | Request Host id

<!-- END_b9feff0da937a43b09bd6c4fd2e619dc -->

<!-- START_ca5079759347e6c529f09caaa833067b -->
## Update a team request

> Example request:

```bash
curl -X PUT "http://localhost/api/teamreq/1" \
    -H "Content-Type: application/json" \
    -d '{"status":"veniam","type":"magni","player_id":"non","host_id":"voluptates"}'

```

```javascript
const url = new URL("http://localhost/api/teamreq/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "status": "veniam",
    "type": "magni",
    "player_id": "non",
    "host_id": "voluptates"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/teamreq/{teamreq}`

`PATCH api/teamreq/{teamreq}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    status | \Illuminate\Http\Request |  required  | Request status
    type | \Illuminate\Http\Request |  required  | Request type
    player_id | \Illuminate\Http\Request |  required  | Request Player requested id
    host_id | \Illuminate\Http\Request |  required  | Request Host id

<!-- END_ca5079759347e6c529f09caaa833067b -->

<!-- START_e7e7311182c973742b4dff7b51d1ca92 -->
## Remove a team request

> Example request:

```bash
curl -X DELETE "http://localhost/api/teamreq/1" 
```

```javascript
const url = new URL("http://localhost/api/teamreq/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/teamreq/{teamreq}`


<!-- END_e7e7311182c973742b4dff7b51d1ca92 -->

#Testimonial management


APIs for managing testimonials
<!-- START_c0964e0b0ea04614a265aeab15e7b8cc -->
## Display testimonials

> Example request:

```bash
curl -X GET -G "http://localhost/api/testimonial" 
```

```javascript
const url = new URL("http://localhost/api/testimonial");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "name": "John Travolta",
        "content": "A great website for football networking. I am so happy.",
        "added on": "2019-10-10 10:25:39",
        "image": "https:\/\/image.freepik.com\/free-photo\/portrait-handsome-man-isolated-white-background_38019-394.jpg"
    },
    {
        "id": 2,
        "name": "Liam Neeson",
        "content": "A great service that moved this sport to the next generation",
        "added on": "2019-10-10 10:28:13",
        "image": "https:\/\/cdn.thedailymash.co.uk\/wp-content\/uploads\/20190324205530\/man-serious-2.jpg"
    },
    {
        "id": 3,
        "name": "Kate Nelly",
        "content": "If you ever need a match to have fun, you have reached the right platform. For a better future.",
        "added on": "2019-10-10 10:29:05",
        "image": "https:\/\/s3.envato.com\/files\/f67dbecf-5618-4381-aa8a-ba8fdebae8bf\/inline_image_preview.jpg"
    }
]
```

### HTTP Request
`GET api/testimonial`


<!-- END_c0964e0b0ea04614a265aeab15e7b8cc -->

<!-- START_55f055b5cf4a730ecdf195fda1cdd2ec -->
## Create a new testimonial

> Example request:

```bash
curl -X POST "http://localhost/api/testimonial" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"voluptatem","name":"ut","content":"commodi"}'

```

```javascript
const url = new URL("http://localhost/api/testimonial");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "voluptatem",
    "name": "ut",
    "content": "commodi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/testimonial`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \Illuminate\Http\Request | $request |  optional  | 
    name | \Illuminate\Http\Request |  optional  | Testimonial author
    content | \Illuminate\Http\Request |  optional  | Testimonial content

<!-- END_55f055b5cf4a730ecdf195fda1cdd2ec -->

<!-- START_055b36657a171935893a28f432ee7708 -->
## Update a testimonial

> Example request:

```bash
curl -X PUT "http://localhost/api/testimonial/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"aut","\\Illuminate\\Http\\Request":"fugiat","$name":"eos","$content":"natus"}'

```

```javascript
const url = new URL("http://localhost/api/testimonial/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "aut",
    "\\Illuminate\\Http\\Request": "fugiat",
    "$name": "eos",
    "$content": "natus"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/testimonial/{testimonial}`

`PATCH api/testimonial/{testimonial}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $id |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 
    $name | \Illuminate\Http\Request |  required  | Testimonial author
    $content | \Illuminate\Http\Request |  required  | Testimonial content

<!-- END_055b36657a171935893a28f432ee7708 -->

<!-- START_8cf3ef3d0d3ed5903b44154000968013 -->
## Remove a testimonial

> Example request:

```bash
curl -X DELETE "http://localhost/api/testimonial/1" \
    -H "Content-Type: application/json" \
    -d '{"$id":19}'

```

```javascript
const url = new URL("http://localhost/api/testimonial/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 19
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/testimonial/{testimonial}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | 

<!-- END_8cf3ef3d0d3ed5903b44154000968013 -->

#Trait management


APIs for managing traits
<!-- START_5dc688dc0fb05db5a010aa2891628b3a -->
## Display all traits

> Example request:

```bash
curl -X GET -G "http://localhost/api/trait" 
```

```javascript
const url = new URL("http://localhost/api/trait");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "trait": "Speedster"
    },
    {
        "id": 2,
        "trait": "Dribbler"
    },
    {
        "id": 3,
        "trait": "Playmaker"
    },
    {
        "id": 4,
        "trait": "Engine"
    },
    {
        "id": 5,
        "trait": "Strength"
    },
    {
        "id": 6,
        "trait": "Clinical Finisher"
    }
]
```

### HTTP Request
`GET api/trait`


<!-- END_5dc688dc0fb05db5a010aa2891628b3a -->

<!-- START_8f53d0137d053a3ec72d036cd5350b70 -->
## Create a new football trait

> Example request:

```bash
curl -X POST "http://localhost/api/trait" \
    -H "Content-Type: application/json" \
    -d '{"$request":"aut","$traits":"consectetur"}'

```

```javascript
const url = new URL("http://localhost/api/trait");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "aut",
    "$traits": "consectetur"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/trait`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | \Illuminate\Http\Request |  optional  | 
    $traits | \Illuminate\Http\Request |  required  | Trait to be created

<!-- END_8f53d0137d053a3ec72d036cd5350b70 -->

<!-- START_c800361e161c5d8f1c357095c9e1bb1c -->
## Update a football trait

> Example request:

```bash
curl -X PUT "http://localhost/api/trait/1" \
    -H "Content-Type: application/json" \
    -d '{"$id":15,"$request":"totam"}'

```

```javascript
const url = new URL("http://localhost/api/trait/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 15,
    "$request": "totam"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/trait/{trait}`

`PATCH api/trait/{trait}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | 
    $request | \Illuminate\Http\Request |  optional  | 

<!-- END_c800361e161c5d8f1c357095c9e1bb1c -->

<!-- START_ba130cba815704ef8ceab3f5e0e20553 -->
## Remove a football trait

> Example request:

```bash
curl -X DELETE "http://localhost/api/trait/1" \
    -H "Content-Type: application/json" \
    -d '{"$id":4}'

```

```javascript
const url = new URL("http://localhost/api/trait/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 4
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/trait/{trait}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  required  | Trait id

<!-- END_ba130cba815704ef8ceab3f5e0e20553 -->

#User Role management


APIs for managing roles
<!-- START_01fc43a11672802a440a34de5e43c9ec -->
## Display User Roles

> Example request:

```bash
curl -X GET -G "http://localhost/api/role" 
```

```javascript
const url = new URL("http://localhost/api/role");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "role": "Admin",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 2,
        "role": "Player",
        "created_at": null,
        "updated_at": null
    }
]
```

### HTTP Request
`GET api/role`


<!-- END_01fc43a11672802a440a34de5e43c9ec -->

<!-- START_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->
## Store a new role

> Example request:

```bash
curl -X POST "http://localhost/api/role" 
```

```javascript
const url = new URL("http://localhost/api/role");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/role`


<!-- END_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->

<!-- START_36f2eed567a95be3b454a71d1c5a4b97 -->
## Display all roles

> Example request:

```bash
curl -X GET -G "http://localhost/api/role/1" 
```

```javascript
const url = new URL("http://localhost/api/role/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET api/role/{role}`


<!-- END_36f2eed567a95be3b454a71d1c5a4b97 -->

<!-- START_82f3bd841b4e9f9e752a55da1338ab0c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/role/1" 
```

```javascript
const url = new URL("http://localhost/api/role/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/role/{role}`

`PATCH api/role/{role}`


<!-- END_82f3bd841b4e9f9e752a55da1338ab0c -->

<!-- START_b065139bcfb0485a301e1eda57770497 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/role/1" 
```

```javascript
const url = new URL("http://localhost/api/role/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/role/{role}`


<!-- END_b065139bcfb0485a301e1eda57770497 -->

#User management


APIs for managing users
<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Displays Users

> Example request:

```bash
curl -X GET -G "http://localhost/api/user" 
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

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
        "footclick_name": "Son",
        "age": "25",
        "foot": "Right",
        "height": 180,
        "location": "North Lebanon",
        "position": "Attacker",
        "trait": "Dribbler"
    },
    {
        "footclick_name": "De Gea",
        "age": "38",
        "foot": "Right",
        "height": 190,
        "location": "Beirut",
        "position": "Goalkeeper",
        "trait": "Strength"
    },
    {
        "footclick_name": "Skriniar",
        "age": "26",
        "foot": "Left",
        "height": 188,
        "location": "North Lebanon",
        "position": "Defender",
        "trait": "Engine"
    },
    {
        "footclick_name": "Fabinho",
        "age": "20",
        "foot": "Right",
        "height": 170,
        "location": "South Lebanon",
        "position": "Midfielder",
        "trait": "Playmaker"
    },
    {
        "footclick_name": "Berbatov",
        "age": "38",
        "foot": "Left",
        "height": 192,
        "location": "Mount Lebanon",
        "position": "Attacker",
        "trait": "Clinical Finisher"
    }
]
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Create a new user

> Example request:

```bash
curl -X POST "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -d '{"$request":"ea","$email":"alias","$password":"est","$footclickName":"optio","$age":"ipsa","$foot":"amet","$height":"dolorem","$locationId":"consequuntur","$positionId":"suscipit","$traitIds":"ut"}'

```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "ea",
    "$email": "alias",
    "$password": "est",
    "$footclickName": "optio",
    "$age": "ipsa",
    "$foot": "amet",
    "$height": "dolorem",
    "$locationId": "consequuntur",
    "$positionId": "suscipit",
    "$traitIds": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | \Illuminate\Http\Request |  optional  | 
    $email | \Illuminate\Http\Request |  required  | Email of the user
    $password | \Illuminate\Http\Request |  required  | Password of the user
    $footclickName | \Illuminate\Http\Request |  required  | FootclickName of the user
    $age | \Illuminate\Http\Request |  required  | Age of the user
    $foot | \Illuminate\Http\Request |  required  | Foot of the user
    $height | \Illuminate\Http\Request |  required  | Height of the user
    $locationId | \Illuminate\Http\Request |  required  | Location of the user
    $positionId | \Illuminate\Http\Request |  required  | Position of the user
    $traitIds | \Illuminate\Http\Request |  required  | Trait of the user

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_a4a2abed1e8e8cad5e6a3282812fe3f3 -->
## Update a User

> Example request:

```bash
curl -X PUT "http://localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"dolorum"}'

```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "dolorum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/{user}`

`PATCH api/user/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remove a user

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"$id":10}'

```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 10
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  required  | User id

<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->

<!-- START_dd8f1dd16fb2b96ca335276d6157b1a8 -->
## Display FILTERED players/users according to Host conditions

> Example request:

```bash
curl -X GET -G "http://localhost/api/filterPlayers" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"officiis","$ageMin":"reiciendis","$ageMax":"maxime","$positionId":"ipsum","$locationId":"fuga"}'

```

```javascript
const url = new URL("http://localhost/api/filterPlayers");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "officiis",
    "$ageMin": "reiciendis",
    "$ageMax": "maxime",
    "$positionId": "ipsum",
    "$locationId": "fuga"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/filterPlayers`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    \Illuminate\Http\Request | $request |  optional  | 
    $ageMin | \Illuminate\Http\Request |  optional  | $request required Minimum Age
    $ageMax | \Illuminate\Http\Request |  optional  | $request required Maximum Age
    $positionId | \Illuminate\Http\Request |  optional  | $request required Preferred Position
    $locationId | \Illuminate\Http\Request |  optional  | $request required Preferred Location

<!-- END_dd8f1dd16fb2b96ca335276d6157b1a8 -->

#general


<!-- START_7c1e0ac0639bb1be6ffd9043492c477a -->
## _ignition/health-check
> Example request:

```bash
curl -X GET -G "http://localhost/_ignition/health-check" 
```

```javascript
const url = new URL("http://localhost/_ignition/health-check");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/health-check`


<!-- END_7c1e0ac0639bb1be6ffd9043492c477a -->

<!-- START_e5f8cf3530eb18016c5b38d338c824a4 -->
## _ignition/execute-solution
> Example request:

```bash
curl -X POST "http://localhost/_ignition/execute-solution" 
```

```javascript
const url = new URL("http://localhost/_ignition/execute-solution");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST _ignition/execute-solution`


<!-- END_e5f8cf3530eb18016c5b38d338c824a4 -->

<!-- START_c7878c22064327a038e101c534d2690d -->
## _ignition/share-report
> Example request:

```bash
curl -X POST "http://localhost/_ignition/share-report" 
```

```javascript
const url = new URL("http://localhost/_ignition/share-report");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST _ignition/share-report`


<!-- END_c7878c22064327a038e101c534d2690d -->

<!-- START_022a636baa67209b79bda81cb8c2b0c5 -->
## _ignition/scripts/{script}
> Example request:

```bash
curl -X GET -G "http://localhost/_ignition/scripts/1" 
```

```javascript
const url = new URL("http://localhost/_ignition/scripts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/scripts/{script}`


<!-- END_022a636baa67209b79bda81cb8c2b0c5 -->

<!-- START_f58213cd71dff813cecd421259a65e22 -->
## _ignition/styles/{style}
> Example request:

```bash
curl -X GET -G "http://localhost/_ignition/styles/1" 
```

```javascript
const url = new URL("http://localhost/_ignition/styles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _ignition/styles/{style}`


<!-- END_f58213cd71dff813cecd421259a65e22 -->

<!-- START_f9bdcfd8c8a3d2c115f91ff07352351e -->
## api/send/email
> Example request:

```bash
curl -X GET -G "http://localhost/api/send/email" 
```

```javascript
const url = new URL("http://localhost/api/send/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/send/email`


<!-- END_f9bdcfd8c8a3d2c115f91ff07352351e -->


