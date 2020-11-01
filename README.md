# dpdcloudapi
 This module provides a PHP capsule for DPD cloud SOAP API used for magento 2 shipping module
 
 ## Requirements
 This module is designed as a part of the iloxx DPD cloud shipping module for magento 2. 
 It expected preinstalled modules from magento. The functions are only prepared and tested as far as they are necessary for the module.
 The following php modules must be installed on the system:
 * php7.x-soap
 
 It is tested with magento 2.3.4 - 2.3.6
 ## How to install
 This module is part of the iloxx DPD cloud shipping module for magento 2. 
 It should be installed automatically when you install this module. A separate installation is not required.

 Here are the steps that would be necessary:
 ```sh
$ composer config repositories.dpdcloudapi git git@github.com:nobodyMO/dpdcloudapi.git
$ composer require zuckerwelt/dpdcloudapi
```

 ## License
 This package is released under the license 'Creative Commons Attribution-NonCommercial 4.0 International Public License'. The reason for the limitation of commercial use is that there is that neither DPD Germany nor Iloxx direct support for Magento 2 or PHP for the Cloud API and also the support for integration was very poor. That's why I don't want these companies to gain a direct advantage from this package.