
# Project Title

A brief description of what this project does and who it's for


## Deployment

To deploy this project run

```bash
  composer install
  php artisan migrate
  php artisan db:seed
```


## API Reference

#### Get all items

```http
  GET /api/login
```

| Body | Type     | Example                |
| :-------- | :------- | :------------------------- |
| `api_key` | `JSON` | {"email":"nombre-aleatorio", "password":"password"} |

#### Get item

```http
  GET /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### add(num1, num2)

Takes two numbers and returns the sum.


## Authors

- [@CarlosApala](https://www.github.com/CarlosApala)

"# ClinicaDental2023"  git init git add README.md git commit -m "first commit" git branch -M main git remote add origin https://github.com/CarlosApala/ClinicaDental2023.git git push -u origin main
"# ClinicaDental2023" 
