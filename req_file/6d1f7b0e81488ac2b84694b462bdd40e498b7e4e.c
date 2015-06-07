#include<stdio.h>
#include<conio.h>
#include<math.h>
int main()
{
long long int i=0,a,b[20],c,f=0,g=0;
printf("        CONVERSION INTO DECIMAL FROM BINARY           \n\n");
printf("enter the binary no. ");
scanf("%lld",&a);
printf("\n");
while(a>0)
{
b[i]=a%10;
i++;
a=a/10;
}
for(c=0;c<i;c++)
{
if((b[c]==1)||(b[c]==0))
{
continue;
}
else
{
g=1;printf("the number u ve entered is not a binary no.\n");
break;
}
}
printf("reverse of the number is ");
for(c=0;c<i;c++)
{
if(g==1)
  break;
printf("%lld",b[c]);
}
printf("\n");
for(c=0;c<i;c++)
{
if(g==1)
  break;
f=f+pow(2,c)*b[c];
}
printf("decimal no is ");
printf("%lld\n",f);
printf("          THANK YOU            ");

getch();
return 0;
}
