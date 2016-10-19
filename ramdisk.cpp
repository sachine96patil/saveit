#include<iostream>
#include<stdlib.h>
using namespace std;
int main()
{
cout<<"\n we are creating RAMDISK with 256M size";
system("mkdir /mnt/ramdisk");
system("mount -t tmpfs -o size=256M tmpfs /mnt/ramdisk");
cout<<"\n RAMDISK created and mounted to /mnt/ramdisk/folder";
system("df -h /mnt/ramdisk");
system("cp calc.cpp /mnt/ramdisk");
system("df -h /mnt/ramdisk");

return 0;
}
