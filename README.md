# Installation

1. Clone or download repository
2. Create `.env` file by copying the `env` using command `cp -r env .env` in terminal
3. Update database name and credentials in `.env` file
4. Run ```composer update```
5. Run `php spark migrate --all`
6. Run `php spark seed --all`
7. Run the command `php spark serve` to run the project
