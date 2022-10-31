/*008conversionesTipos.js/.html: ¿Cuáles son los resultados de estas expresiones?
"" - 1 + 0
true + false
6 / "3"
"2" * "3"
4 + 5 + "px"
"$" + 4 + 5
"4" - 2
"4px" - 2
"  -9  " + 5
"  -9  " - 5
null + 1
undefined + 1
" \t \n" - 2*/

alert("" - 1 + 0); // -1
alert(true + false); // 1
alert(6 / "3"); // 2
alert("2" * "3"); // 6
alert(4 + 5 + "px"); // 9px
alert("$" + 4 + 5); // $45
alert("4" - 2); // 2
alert("4px" - 2); // NaN
alert("  -9  " + 5); // -9 5
alert("  -9  " - 5); // -14
alert(null + 1); // 1
alert(undefined + 1); // NaN
alert(" \t \n" - 2); // -2