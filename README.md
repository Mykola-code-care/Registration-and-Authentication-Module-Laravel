---

## Registration and Authentication Module

This project includes a full auth module:

- **Registration** (`/register`) — email, password, mandatory User Agreement acceptance
- **Login / Logout** (`/login`) — email and password
- **Email verification** — after signup user must verify email (link sent by app mail)
- **Password recovery** — Forgot password (`/forgot-password`) and reset via email link
- **Profile** (`/profile`) — name, email, phone; change password; delete account
- **User Agreement** (`/agreement`) — static page linked from registration

### Email (verification & password reset)

By default mail is logged to `storage/logs/laravel.log` (`MAIL_MAILER=log`). To receive real emails in development use a free SMTP testing service:

1. **Mailtrap** (recommended): [mailtrap.io](https://mailtrap.io) — free inbox for dev emails.
2. Copy SMTP credentials from your Mailtrap inbox.
3. In `.env` set:
   ```env
   MAIL_MAILER=smtp
   MAIL_HOST=sandbox.smtp.mailtrap.io
   MAIL_PORT=2525
   MAIL_USERNAME=your_username
   MAIL_PASSWORD=your_password
   MAIL_FROM_ADDRESS="noreply@yourapp.test"
   MAIL_FROM_NAME="${APP_NAME}"
   ```

Then run migrations and start the app:

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
# Optional: npm install && npm run dev
```
