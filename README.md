## Video Game Collection

Simple frontend and API to retrieve information on video games.

### Installation

Place files in localhost and run `composer install`. If you add new classes, make sure to run `composer dump-autoload`.
In the `dev` folder, there is a SQL export of an example Database to use. Import using your program of choice and update the values in `app/config/config.php` to match your database details.
There is also a Postman JSON collection in the `dev` folder that you can import and use to quickly get started with your API calls.

### API

#### Authentication

POST, PUT and DELETE requests require authentication. Authorized Bearer tokens can be found and modified in `app/config/config.php` as `AUTH_TOKENS`. (default is 'testtoken')

#### List
`GET /api/v1/index.php/{model}/list?limit=10&offset=0&order=id&dir=ASC`

Returns a list of data.
- model : `users`, `videogames`, `developers`, `publishers`
- limit : Limits size of returned list. For no limit, use 0 (default 10)
- offset: Offset of returned list (default 0)
- order: Order by column (default id)
- dir: Direction of the order (default ASC)

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


## Current TODO
- Frontend development, currently just returns full list.
  - Include user login session (admin/admin)
  - Creation/Update view
  - Detail View
