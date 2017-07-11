#include<stdio.h>
//#include<conio.h>
#include<sys/types.h>
#include<unistd.h>
#include<string.h>
#include<sys/wait.h>
#include<stdlib.h>

#define MAX_COUNT 10
#define BUF_SIZE 100

void ChildProcess(char []);

void main(void)
{
	pid_t pid,pid2,pid1;
	int status;
	int i;
	char buf[BUF_SIZE];

	printf("*** Parent is about to fork prosess one***\n");
	if((pid1=fork())<0)
	{
		printf(" Failed to fork proces1\n");
		exit(1);
	}
	else if(pid1==0)
		ChildProcess("First");

	printf("*** Parent is about to fork process2\n");
	if((pid2 = fork())<0)
	{
		printf("Failed to fork process2\n");
		exit(1);
	}
	else if(pid2 == 0 )
		ChildProcess("Second");

	sprintf(buf,"*** Parent enters waiting status....\n");
	write(1,buf,strlen(buf));
	pid=wait(&status);
	sprintf(buf,"*** Parent detects Process %d was done*** \n",pid);
	write(1,buf,strlen(buf));
	pid=wait(&status);
	printf("*** Parent detects process %d done ***\n",pid);
	printf("***Parent exit***");
	exit(0);
}


void ChildProcess(char *number)
{
	pid_t pid;
	int i;
	char buf[BUF_SIZE];

	pid = getpid();
	sprintf(buf,"%s child process starts (pid = %d)\n",number,pid);
	write(1,buf,strlen(buf));
	for (i=1;i<=MAX_COUNT;i++)
	{
		sprintf(buf,"%s childs output,value = %d\n",number ,i);
		write (1,buf,strlen(buf));
	}
	sprintf(buf,"%s child(pid = %d) is about to exit \n",number ,pid);
	write(1,buf,strlen(buf));
	exit(0);
}
