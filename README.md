
# DunkinBisquids
### Description
Dunkin Bisquids is an object-orientated PHP project, styled  with Bootstrap, that fetches and displays information about a variety of the best biscuits from a MySQL database.

Upon selecting a biscuit you can view more in-depth facts about your favourite biscuit with a description, an arbitrary dunking time metric and a link to its wikipedia.

## Getting Started

### Dependencies
``` 
- PHP version 7.4.30 
- MySQL version 5.5.5
- Composer version 2.4.1
- PHPUnit version 9.5.21
- Bootstrap version 5.2
```
### Installing
Clone this repo:
```
git@github.com:iO-Academy/2022-jul-DunkinBisquids.git
```
Navigate into the newly created repo:
```
cd 2022-jul-DunkinBisquids
```
From the root of the project run:
```
Composer install
```
Install the database `/biscuits.sql` into a db named `biscuits`

Ensure your local database host, username and password details are correct in:
```
src/Classes/Utilities/GetDB.php
```
The application will now be available wherever you access it
### Authors
- Aidan Maskell - [@aidanmaskell](github.com/aidanmaskell)
- Chris Walton - [@cr-walton](github.com/cr-walton)
- Emily Clarkson - [@erc-clarkson](github.com/erc-clarkson)
- Joe Dixon - [@Jdixon04](github.com/jdixon04)
- Josh Lewis - [@josh-lew](github.com/josh-lew)
- Maria Fedorec-Kyte - [@mfk07](github.com/mfk07)
- Mikey Ying - [@mikeycodingstuff](github.com/mikeycodingstuff)

### Acknowledgements
A big thank you to Emily Clarkson, who provided all of the artwork for the project.

Also to Charlie, who provided the bedrock of this project with his years of biscuits research.
