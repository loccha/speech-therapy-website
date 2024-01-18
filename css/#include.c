#include<stdio.h>

int a = 5; // Mutable
const float PI = 3.1415926; // Immutable
const int* p = &a; // Immutable, pointee mutable
*p = 6; // OK

printf(a);
