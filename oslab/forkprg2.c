//c program to implement linux fork() system call
//parent process not distinguished from the child process
#include<stdio.h>
//#include<string.h>
#include<sys/types.h>
#include<unistd.h>

#define MAX_COUNT 100

void ChildProcess(void);  /*child process prototype*/
void ParentProcess(void); /*parent process prototype*/
void main(void)
{
	pid_t pid;
	pid=fork();
	printf("process id:%d\n",pid);
	if(pid == 0)
	{
		ChildProcess();
	}
	else
		ParentProcess();
}

void ChildProcess(void)
{
	int i;
	for(i=1;i<=MAX_COUNT;i++)
	{
		printf("this line is from child,value=%d\n",i);
		printf(" ***Child PROCESS is done");
	}
}

void ParentProcess(void)
{
	int i;

	for(i=1;i<=MAX_COUNT;i++)
	{
		printf("this line is from parent,value=%d\n",i);
		printf(" ***Child PROCESS is done");
	}
}
