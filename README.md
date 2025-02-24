# Symfony CSRF issue reproducer

1. `symfony composer install`
2. `npm i`
3. `npm run dev`
4. `symfony serve`
5. `open https://localhost:8000`
6. Submit the empty form multiple times -> you should see validation error: 'This value should not be blank.'
7. Start the session
8. Submit the empty form multiple times -> for the first time you should see validation error: 'This value should not be blank.', after that there is csrf error too 'The CSRF token is invalid. Please try to resubmit the form.'
