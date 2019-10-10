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
[]
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
    -d '{"\\Illuminate\\Http\\Request":"veritatis"}'

```

```javascript
const url = new URL("http://localhost/api/bestgoal");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "veritatis"
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
    -d '{"int":"asperiores","\\Illuminate\\Http\\Request":"necessitatibus"}'

```

```javascript
const url = new URL("http://localhost/api/bestgoal/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "asperiores",
    "\\Illuminate\\Http\\Request": "necessitatibus"
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
    -d '{"\\int":"sint"}'

```

```javascript
const url = new URL("http://localhost/api/bestgoal/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\int": "sint"
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
    -d '{"\\Illuminate\\Http\\Request":"ab"}'

```

```javascript
const url = new URL("http://localhost/api/position");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "ab"
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

<!-- END_912cf5f42f8a439590b0d6c36933b7fe -->

<!-- START_2ede7c8d75017caba13682f1ad1ebd67 -->
## Update a position

> Example request:

```bash
curl -X PUT "http://localhost/api/position/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"consequatur","\\Illuminate\\Http\\Request":"dolorem"}'

```

```javascript
const url = new URL("http://localhost/api/position/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "consequatur",
    "\\Illuminate\\Http\\Request": "dolorem"
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
    int | $id |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_2ede7c8d75017caba13682f1ad1ebd67 -->

<!-- START_69954f900497a9167006affd061f5784 -->
## Remove a positions

> Example request:

```bash
curl -X DELETE "http://localhost/api/position/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"omnis"}'

```

```javascript
const url = new URL("http://localhost/api/position/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "omnis"
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

#Host Team management


APIs for managing Hosts
<!-- START_23b8a30e3fcbaa3e105052ed8792beeb -->
## Display hosts

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
[]
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
    -d '{"int":"voluptatem"}'

```

```javascript
const url = new URL("http://localhost/api/hostteam/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "voluptatem"
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
    -d '{"\\Illuminate\\Http\\Request":"quas"}'

```

```javascript
const url = new URL("http://localhost/api/stadium");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "quas"
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

<!-- END_a980268f60e5292e81460f13b9710f1e -->

<!-- START_805d6e66e1a9b571ed7369ca8b7dd9dc -->
## Update a stadium

> Example request:

```bash
curl -X PUT "http://localhost/api/stadium/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"dicta"}'

```

```javascript
const url = new URL("http://localhost/api/stadium/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "dicta"
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
    int | $id |  optional  | @bodyParam  \Illuminate\Http\Request  $request

<!-- END_805d6e66e1a9b571ed7369ca8b7dd9dc -->

<!-- START_01bf023a62d9fe3039546aeeb12e96e1 -->
## Remove a stadium

> Example request:

```bash
curl -X DELETE "http://localhost/api/stadium/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"aut"}'

```

```javascript
const url = new URL("http://localhost/api/stadium/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "aut"
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
    int | $id |  optional  | 

<!-- END_01bf023a62d9fe3039546aeeb12e96e1 -->

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
        "added on": "2019-10-10 10:25:39"
    },
    {
        "id": 2,
        "name": "Liam Neeson",
        "content": "A great service that moved this sport to the next generation",
        "added on": "2019-10-10 10:28:13"
    },
    {
        "id": 3,
        "name": "Kate Nelly",
        "content": "If you ever need a match to have fun, you have reached the right platform. For a better future.",
        "added on": "2019-10-10 10:29:05"
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
    -d '{"\\Illuminate\\Http\\Request":"non"}'

```

```javascript
const url = new URL("http://localhost/api/testimonial");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "non"
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

<!-- END_55f055b5cf4a730ecdf195fda1cdd2ec -->

<!-- START_055b36657a171935893a28f432ee7708 -->
## Update a testimonial

> Example request:

```bash
curl -X PUT "http://localhost/api/testimonial/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"officia","\\Illuminate\\Http\\Request":"rem"}'

```

```javascript
const url = new URL("http://localhost/api/testimonial/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "officia",
    "\\Illuminate\\Http\\Request": "rem"
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

<!-- END_055b36657a171935893a28f432ee7708 -->

<!-- START_8cf3ef3d0d3ed5903b44154000968013 -->
## Remove a testimonial

> Example request:

```bash
curl -X DELETE "http://localhost/api/testimonial/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"ut"}'

```

```javascript
const url = new URL("http://localhost/api/testimonial/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "ut"
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
    int | $id |  optional  | 

<!-- END_8cf3ef3d0d3ed5903b44154000968013 -->

#Trait management


APIs for managing traits
<!-- START_5dc688dc0fb05db5a010aa2891628b3a -->
## Display a trait

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
    -d '{"\\Illuminate\\Http\\Request":"quaerat"}'

```

```javascript
const url = new URL("http://localhost/api/trait");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "quaerat"
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
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_8f53d0137d053a3ec72d036cd5350b70 -->

<!-- START_c800361e161c5d8f1c357095c9e1bb1c -->
## Update a football trait

> Example request:

```bash
curl -X PUT "http://localhost/api/trait/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"et","\\Illuminate\\Http\\Request":"et"}'

```

```javascript
const url = new URL("http://localhost/api/trait/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "et",
    "\\Illuminate\\Http\\Request": "et"
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
    int | $id |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_c800361e161c5d8f1c357095c9e1bb1c -->

<!-- START_ba130cba815704ef8ceab3f5e0e20553 -->
## Remove a football trait

> Example request:

```bash
curl -X DELETE "http://localhost/api/trait/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"itaque"}'

```

```javascript
const url = new URL("http://localhost/api/trait/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "itaque"
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
    int | $id |  optional  | 

<!-- END_ba130cba815704ef8ceab3f5e0e20553 -->

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
        "id": 1,
        "email": "footclick@admin.com",
        "footclick_name": "FootAdmin",
        "foot": "right",
        "height": 185,
        "location": "Lebanon",
        "position": "Defender",
        "trait": "Playmaker",
        "role": "admin",
        "added_on": "2019-10-10 11:27:30"
    }
]
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Create a user

> Example request:

```bash
curl -X POST "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -d '{"\\Illuminate\\Http\\Request":"ea"}'

```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "\\Illuminate\\Http\\Request": "ea"
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
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_a4a2abed1e8e8cad5e6a3282812fe3f3 -->
## Update a user

> Example request:

```bash
curl -X PUT "http://localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"quo","\\Illuminate\\Http\\Request":"a"}'

```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "quo",
    "\\Illuminate\\Http\\Request": "a"
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
    int | $id |  optional  | 
    \Illuminate\Http\Request | $request |  optional  | 

<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remove a user

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -d '{"int":"est"}'

```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "est"
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
    int | $id |  optional  | 

<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->

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

<!-- START_b72779f685a6629a69b08055bc917ad1 -->
## Display a listing of the resource.

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
[]
```

### HTTP Request
`GET api/hostreqposition`


<!-- END_b72779f685a6629a69b08055bc917ad1 -->

<!-- START_b1e059f2f4bcbc425c3d7cc67e562dd3 -->
## Store a newly created resource in storage.

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

<!-- START_b7d115c46fa9f5ad2e2eb3e07e7e98f9 -->
## Display a listing of the resource.

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
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/matchreq" 
```

```javascript
const url = new URL("http://localhost/api/matchreq");

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
`POST api/matchreq`


<!-- END_292402b32a29ad59a7d173bbea93eacc -->

<!-- START_7b11cfbf1d7ae95ca27cebf96a295e7c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/matchreq/1" 
```

```javascript
const url = new URL("http://localhost/api/matchreq/1");

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
`PUT api/matchreq/{matchreq}`

`PATCH api/matchreq/{matchreq}`


<!-- END_7b11cfbf1d7ae95ca27cebf96a295e7c -->

<!-- START_54426b662047873f257a06cbe90759d4 -->
## Remove the specified resource from storage.

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

<!-- START_35b12c59d75cb53c870be86162948b9b -->
## Display a listing of the resource.

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
[]
```

### HTTP Request
`GET api/playerposition`


<!-- END_35b12c59d75cb53c870be86162948b9b -->

<!-- START_717d770a7908d9f2d3a803de135fce0d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/playerposition" 
```

```javascript
const url = new URL("http://localhost/api/playerposition");

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
`POST api/playerposition`


<!-- END_717d770a7908d9f2d3a803de135fce0d -->

<!-- START_cf828b2aae6e1644dea7553fee7b0513 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/playerposition/1" 
```

```javascript
const url = new URL("http://localhost/api/playerposition/1");

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
`PUT api/playerposition/{playerposition}`

`PATCH api/playerposition/{playerposition}`


<!-- END_cf828b2aae6e1644dea7553fee7b0513 -->

<!-- START_457aa639731d83f8ec9fe33f11375e94 -->
## Remove the specified resource from storage.

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

<!-- START_b604d47382e9fa57875b43d1fc439ad8 -->
## Display a listing of the resource.

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
[]
```

### HTTP Request
`GET api/playertrait`


<!-- END_b604d47382e9fa57875b43d1fc439ad8 -->

<!-- START_8ab6c1bc856602490ae45ac5a11e1c0e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/playertrait" 
```

```javascript
const url = new URL("http://localhost/api/playertrait");

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
`POST api/playertrait`


<!-- END_8ab6c1bc856602490ae45ac5a11e1c0e -->

<!-- START_f8dd43c5462bc6336f357de473ffb57a -->
## Update the specified resource in storage.

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
## Remove the specified resource from storage.

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

<!-- START_6b8d4bcded314c900648c419cc434714 -->
## Display a listing of the resource.

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
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/teamreq" 
```

```javascript
const url = new URL("http://localhost/api/teamreq");

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
`POST api/teamreq`


<!-- END_b9feff0da937a43b09bd6c4fd2e619dc -->

<!-- START_ca5079759347e6c529f09caaa833067b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/teamreq/1" 
```

```javascript
const url = new URL("http://localhost/api/teamreq/1");

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
`PUT api/teamreq/{teamreq}`

`PATCH api/teamreq/{teamreq}`


<!-- END_ca5079759347e6c529f09caaa833067b -->

<!-- START_e7e7311182c973742b4dff7b51d1ca92 -->
## Remove the specified resource from storage.

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


