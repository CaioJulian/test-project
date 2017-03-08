#!/usr/bin/env node

"use strict";
var troco = require('./Troco.js')
var notas = troco.getQtdeNotas(process.argv[2] || 0)
console.log(notas)

