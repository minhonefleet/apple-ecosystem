### json-server

minhc@DESKTOP-ROGN75C MINGW64 /c/laragon/www/frontend-project
$ npm init
This utility will walk you through creating a package.json file.
It only covers the most common items, and tries to guess sensible defaults.

See `npm help init` for definitive documentation on these fields
and exactly what they do.

Use `npm install <pkg>` afterwards to install a package and
save it as a dependency in the package.json file.

Press ^C at any time to quit.
package name: (frontend-project)
version: (1.0.0)
description:
entry point: (index.js)
test command:
git repository:
keywords:
author: minhcecilio
license: (ISC)
About to write to C:\laragon\www\frontend-project\package.json:

{
  "name": "frontend-project",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "minhcecilio",
  "license": "ISC"
}


Is this OK? (yes)

minhc@DESKTOP-ROGN75C MINGW64 /c/laragon/www/frontend-project
$ npm install json-server

added 182 packages, and audited 183 packages in 13s

21 packages are looking for funding
  run `npm fund` for details

5 moderate severity vulnerabilities

To address all issues, run:
  npm audit fix

Run `npm audit` for details.

minhc@DESKTOP-ROGN75C MINGW64 /c/laragon/www/frontend-project
$ npm start

> frontend-project@1.0.0 start
> json-server --watch db.json


  \{^_^}/ hi!

  Loading db.json
  Done

  Resources
  http://localhost:3000/posts
  http://localhost:3000/comments
  http://localhost:3000/profile

  Home
  http://localhost:3000

  Type s + enter at any time to create a snapshot of the database
  Watching...

GET /db 200 12.607 ms - 243
GET /__rules 404 3.040 ms - 2
GET /posts 200 25.925 ms - 77