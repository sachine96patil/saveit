#include<unistd.h>
#include<bits/stdc++.h>
using namespace std;

int main()
{
	int fd[2],choi;
	int childpid=0;
	
	char str[80];
	char buf1[80],buf2[80];
	
	pipe(fd);
	
	char ch; 
	do
	{
	cout<<"1.enter string ";
	cout<<"2.create process(child) ";
	cout<<"3.print reverse ";
	cout<<"4.exit ";
	cout<<"enter ur choice ";
	cin>>choi;
	
	childpid=fork();
	switch(choi)
	{
		case 1:
		cout<<"Enter string";
		cin>>str;
		break;
		
		case 2:
		if (childpid==-1)
		{
			cout<<"process failed:";
		}
		if (childpid==0)
		{
			cout<<"pipe implemented sucessfully!!\n\n";
			cout<<"pid of child:"<<getpid();
			
			cout<<"string passed"<<str;
			write(fd[1],str,(strlen(str)+1));
		}
		break;
		
		case 3:
		cout<<"pid of parent process:"<<getpid();
		close(fd[1]);
		read(fd[0],buf1,sizeof(buf1));
		cout<<"string got from other end:"<<buf1;
		
		cout<<"\n\nreversed onr:";
		
		for(int i=strlen(buf1)-1,j=0;j<=strlen(buf1);i--,j++)
		{
			buf2[j]=buf1[i];		
			
		}
		cout<<buf2<<"\n\n\n\n";
		
		break;		
	}
	
	}
	while(ch!='n');

}
