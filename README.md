## Support us

Support Opscale

At Opscale, we’re passionate about contributing to the open-source community by providing solutions that help businesses scale efficiently. If you’ve found our tools helpful, here are a few ways you can show your support:

⭐ **Star this repository** to help others discover our work and be part of our growing community. Every star makes a difference!

💬 **Share your experience** by leaving a review on [Trustpilot](https://www.trustpilot.com/review/opscale.co) or sharing your thoughts on social media. Your feedback helps us improve and grow!

📧 **Send us feedback** on what we can improve at [feedback@opscale.co](mailto:feedback@opscale.co). We value your input to make our tools even better for everyone.

🙏 **Get involved** by actively contributing to our open-source repositories. Your participation benefits the entire community and helps push the boundaries of what’s possible.

💼 **Hire us** if you need custom dashboards, admin panels, internal tools or MVPs tailored to your business. With our expertise, we can help you systematize operations or enhance your existing product. Contact us at hire@opscale.co to discuss your project needs.

Thanks for helping Opscale continue to scale! 🚀

## Description

Opscale provides open-source Laravel Nova packages designed to empower startups and growing businesses for creating better dashboards, admin panels, internal tools or MVPs. This is our default template for creating new Laravel Nova projects with the best practices.

## Code Quality

We use Husky for enforcing code quality rules. If you want to manually fix files with issues, you can run `npm run fix`. To check which files have problems without fixing them, use `npm run lint`. Linting will automatically run before committing to ensure code quality standards are maintained.

## Performance

Laravel Nova generates a lot of requests, which can lead to slow performance in Vapor or local deployment via Docker, even when using PHP-FPM. To address this, Octane is used by default for improved performance. When running the project locally, remember to use `php artisan octane:start` instead of `php artisan serve` to take advantage of these performance benefits.

## CI/CD

For an ease deployment process with everything needed, Vapor is supported and a default GitHub Action deployment pipeline is ready to use. We also support Docker deployment. To build the Docker image, navigate to the docker folder and run:

```bash
docker buildx build -t opscale/nova -f Swoole.Alpine.Dockerfile ../ && make up
```

You can access your Nova app at http://localhost:8000, or if you want to use the Nginx proxy, you can access it at https://localhost. Remember to create the SSL certificates first in /docker/nginx/ssl. Also check /docker/database for the initial database creation script.

## Arquitecture

TODO: Add support for enforcing software architecture rules

## Credits

- [Opscale](https://github.com/opscale-co)
- [Exaco](https://github.com/exaco/laravel-octane-dockerfile)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.