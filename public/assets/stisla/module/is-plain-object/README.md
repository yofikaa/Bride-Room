# is-plain-object [![NPM version](https://img.shields.io/npm/v/is-plain-object.svg?style=flat)](https://www.npmjs.com/package/is-plain-object) [![NPM monthly downloads](https://img.shields.io/npm/dm/is-plain-object.svg?style=flat)](https://npmjs.org/package/is-plain-object) [![NPM total downloads](https://img.shields.io/npm/dt/is-plain-object.svg?style=flat)](https://npmjs.org/package/is-plain-object) [![Linux Build Status](https://img.shields.io/travis/jonschlinkert/is-plain-object.svg?style=flat&label=Travis)](https://travis-ci.org/jonschlinkert/is-plain-object)

> Returns true if an object was created by the `Object` constructor.

## Install

Install with [npm](https://www.npmjs.com/):

```sh
$ npm install --save is-plain-object
```

Use [isobject](https://github.com/jonschlinkert/isobject) if you only want to check if the value is an object and not an array or null.

## Usage

```js
var isPlainObject = require('is-plain-object');
```

**true** when created by the `Object` constructor.

```js
isPlainObject(Object.create({}));
//=> true
isPlainObject(Object.create(Object.prototype));
//=> true
isPlainObject({foo: 'bar'});
//=> true
isPlainObject({});
//=> true
```

**false** when not created by the `Object` constructor.

```js
isPlainObject(1);
//=> false
isPlainObject(['foo', 'bar']);
//=> false
isPlainObject([]);
//=> false
isPlainObject(new Foo);
//=> false
isPlainObject(null);
//=> false
isPlainObject(Object.create(null));
//=> false
```

## About

### Related projects

* [is-number](https://www.npmjs.com/package/is-number): Returns true if the value is a number. comprehensive tests. | [homepage](https://github.com/jonschlinkert/is-number "Returns true if the value is a number. comprehensive tests.")
* [isobject](https://www.npmjs.com/package/isobject): Returns true if the value is an object and not an array or null. | [homepage](https://github.com/jonschlinkert/isobject "Returns true if the value is an object and not an array or null.")
* [kind-of](https://www.npmjs.com/package/kind-of): Get the native type of a value. | [homepage](https://github.com/jonschlinkert/kind-of "Get the native type of a value.")

### Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

### Contributors

| **Commits** | **Contributor** | 
| --- | --- |
| 17 | [jonschlinkert](https://github.com/jonschlinkert) |
| 6 | [stevenvachon](https://github.com/stevenvachon) |
| 3 | [onokumus](https://github.com/onokumus) |
| 1 | [wtgtybhertgeghgtwtg](https://github.com/wtgtybhertgeghgtwtg) |

### Building docs

_(This project's readme.md is generated by [verb](https://github.com/verbose/verb-generate-readme), please don't edit the readme directly. Any changes to the readme must be made in the [.verb.md](.verb.md) readme template.)_

To generate the readme, run the following command:

```sh
$ npm install -g verbose/verb#dev verb-generate-readme && verb
```

### Running tests

Running and reviewing unit tests is a great way to get familiarized with a library and its API. You can install dependencies and run tests with the following command:

```sh
$ npm install && npm test
```

### Author

**Jon Schlinkert**

* [github/jonschlinkert](https://github.com/jonschlinkert)
* [twitter/jonschlinkert](https://twitter.com/jonschlinkert)

### License

Copyright ?? 2017, [Jon Schlinkert](https://github.com/jonschlinkert).
Released under the [MIT License](LICENSE).

***

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.6.0, on July 11, 2017._