# Laravel Meetup Demo - Secret Code Generator

This package provides a modular, reusable **Secret Code Generator** for Laravel applications. It supports encoding messages into various formats such as **Morse code** and **Caesar Cipher**, with the flexibility to add custom encoders through configuration.

---

## Installation

Install the package via Composer:

```bash
composer require meetup/laravel-meetup-demo
```

Publish the configuration file:

```bash
php artisan vendor:publish --tag="meetup-demo-config"
```

This is the contents of the published config file:

```php
return [
    'encoders' => [
        'morse' => SecretCode\Encoders\MorseCodeEncoder::class,
        'caesar' => SecretCode\Encoders\CaesarCipherEncoder::class,
    ],
];
```

---

## Usage

## **Encode Messages Using Supported Methods**

```php
use Meetup\Encoder\Encoder;

// Morse code encoding
echo Encoder::encode('hello world', 'morse');
// Output: .... . .-.. .-.. --- / .-- --- .-. .-.. -..

// Caesar cipher with custom shift
echo Encoder::encode('hello world', 'caesar', ['shift' => 1]);
// Output: ifmmp xpsme
```

### Available Methods:
- **morse:** Encodes text into Morse code.
- **caesar:** Shifts characters using the Caesar Cipher (customizable shift value).

## Creating your own encoder

An encoder is any class that implements \Meetup\Encoder\Encoders\Contracts\Encoder. Here's what that interface looks like.

```php
interface Encoder
{
    public function encode(string $text, array $options = []): string;
}
```

```$text``` is the text to encode, and ```$options``` is an array of options that can be used to customize the encoding process.

After creating your own Encoder you must register it in the ```encoders``` array in the ```meetup-demo``` config file.

---

## Testing

Run **Pest tests** to ensure everything is working correctly:

```bash
composer test
```

---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Contributing

Contributions are welcome! Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

---

## Security Vulnerabilities

If you discover any security-related issues, please review [our security policy](../../security/policy) for guidance.

---

## Credits

- [Jønsson](https://github.com/SimonJnsson)
- [All Contributors](../../contributors)

---

## License

The **MIT License (MIT)**. Please see [License File](LICENSE.md) for more information.

