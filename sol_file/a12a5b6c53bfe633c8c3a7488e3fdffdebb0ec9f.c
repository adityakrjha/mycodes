#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
int i;
struct address
{
char street[50];
char city[20];
int pin;
};
struct emp
{
char name[25];
struct address b;
};
struct emp a[2];
for(i=0;i<=2;i++)
{
printf("Enter the address of %d person\n",i+1);
printf("Name  Street  City Pin\n");
scanf("%s%s%s%d",&a[i].name,&a[i].b.street,&a[i].b.city,&a[i].b.pin);
}
for(i=0;i<=2;i++)
{
printf("name=%s street=%s city=%s pin=%d",a[i].name,a[i].b.street,a[i].b.city,a[i].b.pin);
printf("\n");
}
}
