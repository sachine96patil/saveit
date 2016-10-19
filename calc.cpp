 #include<iostream>
#include<fstream>
using namespace std;
int main()
{
ofstream fout;
fout.open("/mnt/ramdisk/input.txt");
int a,b,c,d,y=1;
while(y)
{
fout<<endl<<"First number : ";
cout<<"\n\nEnter Number ";
cin>>a;
fout<<a<<endl<<"Second number : ";
cout<<"\nEnter Another Number ";
cin>>b;
fout<<b<<endl;
cout<<"\nSelect your option\n\n1.Addition\n\n2.Subtraction\n\n3.Multiplication\n\n4.Division\n\nPress any key to exit ";
cin>>c;
switch(c)
{
case 1:
{
d=a+b;
cout<<"\n\nAnswer: "<<d;
fout<<"Addition is : "<<d;
break;
}
case 2:
{
d=a-b;
cout<<"\n\nAnswer: "<<d;
fout<<"Subtraction is : "<<d;
break;
}
case 3:
{
d=a*b;
cout<<"\n\nAnswer: "<<d;
fout<<"Multiplication is : "<<d;
break;
}
case 4:
{
d=a/b;
cout<<"\n\nAnswer: "<<d;
fout<<"Division is : "<<d;
break;
}
default:
{
y=0;
break;
}
}
}
fout.close();
return 0;

}
