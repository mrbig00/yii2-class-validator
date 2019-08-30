# YII2 Class validator

ClassValidator checks if the attribute is a subtype of a given class

## Installation

Use the package manager [composer](https://getcomposer.org/) to install the Yii2 class validator.

```bash
composer require mrbig00/yii2-class-validator
```

## Usage
```php
public function rules(){
   return [
      [['client'], ClassValidator::class, 'skipOnEmpty' => false, 'targetClass' => Client::class],
      ...
   ];
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)