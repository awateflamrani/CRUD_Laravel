#include "class.h"
#include <iostream>
using namespace std;
point::point()
{
    
}
void point::afficher()
{
    cout <<"je suis le point :("<<abs<<","<<ord<<"\n";
}
void point :: initialiser(float abs, float ord)
{
    this->abs=abs;
    this->ord=ord;
}
bool point:: egal(point a)
{
    return(abs==a.abs && this->ord==a.ord);
}