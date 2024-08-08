# Gizila Web-App

Dikembangkan untuk memenuhi tugas UAS Pengembangan Aplikasi Web Framework


## Run Locally

1. Clone the project

```bash
  git clone https://github.com/alfaaannz/project3-alfan.git
```

2. Go to the project directory

```bash
  cd project3-alfan
```

3. Update dependencies

```bash
  composer update
```

4. Create `.env` file by copying the `env` using command `cp -r env .env` in terminal

5. Run

```bash
  php spark migrate --all
```
6. Run

```bash
  php spark seed --all
```
7. Start the project

```bash
  php spark serve
```

