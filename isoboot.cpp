#include<stdio.h>
#include <stdlib.h>
int main()
{
system("su -c'livecd-iso-to-disk --format --reset-mbr Fedora-Workstation-Live-x86_64-24-1.2.iso /dev/sdb'");
return 0;
}
