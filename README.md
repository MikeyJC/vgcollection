## Video Game Collection

Simple frontend and API to retrieve information on video games.



### API

#### Authentication

POST, PUT and DELETE requests require authentication. Authorized Bearer tokens can be found and modified in `app/config/config.php` as `AUTH_TOKENS`. (default is 'testtoken')

#### List
`GET /api/v1/index.php/{model}/list?limit=10&offset=0`

Returns a list of data.
- model : `users`, `videogames`, `developers`, `publishers`
- limit : Limits size of returned list (default 10)
- offset: Offset of returned list (default 0)

#### Create
`POST /api/v1/index.php/{model}/create`

Body:
```
{
    "name": "Super Mario 64",
    "platform": "N64",
    "release_date": "1997-03-01",
    "developer_id": 2,
    "publisher_id": 2
}
```

Creates a new entry in the database.
- model : `videogames`, `developers`, `publishers`
- Body: raw JSON
  - name: String
  - `videogames` only:
    - platform: String
    - release_date: Date (Y-m-d)
    - developer_id: ID (developer table)
    - publisher_id: ID (publisher table)

#### Update
`PUT /api/v1/index.php/{model}/update?id={id}`

Body:
```
{
    "name": "Super Mario 64",
    "platform": "N64",
    "release_date": "1997-03-01",
    "developer_id": 2,
    "publisher_id": 2
}
```

Updates an entry in the database.
- model : `videogames`, `developers`, `publishers`
- id : ID of record
- Body: raw JSON
  - name: String
  - `videogames` only:
    - platform: String
    - release_date: Date (Y-m-d)
    - developer_id: ID (developer table)
    - publisher_id: ID (publisher table)

#### Delete
`DELETE /api/v1/index.php/{model}/delete?id={id}`

Deletes an entry from the database.
- model : `videogames`, `developers`, `publishers`
- id : ID of record
