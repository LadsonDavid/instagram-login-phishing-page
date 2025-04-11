# Instagram Login Page Clone

## EDUCATIONAL PURPOSE ONLY

This project is a clone of Instagram's login page created **strictly for educational purposes only**. It demonstrates how phishing pages can mimic legitimate websites and helps understand web security vulnerabilities.

## Disclaimer

**WARNING**: Using this or similar code to collect credentials from real users without their knowledge and consent is:
- Illegal in most jurisdictions
- A violation of Instagram's Terms of Service
- Unethical and potentially harmful

This code should only be used in authorized security testing environments, educational settings, or for personal learning.

## Features

- Pixel-perfect recreation of Instagram's login interface
- Side-by-side layout with promotional image and login form
- Responsive design that works on mobile and desktop
- Form validation
- Credential capture demonstration with redirect to official Instagram

## Project Structure

- `index.php` - Main container file with side-by-side layout
- `content.php` - Contains the login form
- `footer.php` - Contains copyright info and links
- `data.php` - Processes form data and redirects to Instagram
- `igpass.htm` - Storage file for captured credentials
- `view_data.php` - Password-protected interface to view captured data
- `set_permissions.php` - Helper script to set file permissions
- `css/main.css` - Primary styling
- `css/grid.css` - Responsive grid layout
- `assets/` - Contains all images and icons

## Layout

The page has two main layouts:
1. **Mobile**: Single column layout with login form only
2. **Desktop**: Side-by-side layout with promotional image on left and login form on right

## Credential Handling

For educational purposes, this project demonstrates how credentials can be captured:

1. When a user submits the login form, `data.php` processes the form data
2. Submitted credentials are stored in `igpass.htm` with timestamp and IP information
3. User is redirected to the legitimate Instagram website
4. Stored credentials can be viewed via the password-protected `view_data.php` page

## Setup

1. Place these files in a PHP-enabled web server directory
2. Replace placeholder image files in `assets/` with actual Instagram-like images
3. Run `set_permissions.php` to ensure proper file permissions
4. Access the index.php file through a web browser
5. To view captured credentials, visit `view_data.php` (default password: admin123)

## Security Measures

For educational security testing only:
- The `.htaccess` file restricts direct access to sensitive files
- `view_data.php` requires a password to view captured data
- All captured data is stored locally, not sent to external servers

## Legal Notice

This project does not actually connect to Instagram's services. Any use of this code to deceive users or collect unauthorized information is strictly prohibited and may result in criminal and civil penalties.

## Educational Resources

If you want to learn more about web security and protecting against phishing:
- [OWASP Phishing](https://owasp.org/www-community/attacks/Phishing)
- [How to Recognize and Avoid Phishing Scams](https://www.consumer.ftc.gov/articles/how-recognize-and-avoid-phishing-scams)
- [Google's Phishing Quiz](https://phishingquiz.withgoogle.com/)

Remember, understanding how attacks work is the first step in learning how to defend against them.
