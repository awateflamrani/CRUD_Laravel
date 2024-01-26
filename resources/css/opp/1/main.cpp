#include <iostream>
using namespace std;
#include "header/class.cpp"

int main()
{
    point A;
    A.initialiser(5,15);
    A.afficher();
    point B;
    B.initialiser(5,10);
    if(A.egal(B)==true)
    {
     cout <<"A = B "<< endl;
    } 
    else
    cout << "A != B"<< endl;
return 0;


}
