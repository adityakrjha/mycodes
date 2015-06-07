#include<stdio.h>
#include<conio.h>

void main()
{
int m,a[100][100],i,j,k,l,b[100][100],h,x;
printf("enter the order :");
scanf("%d",&m);
printf("\n");
x=m;
for(i=0;i<=m-1;i++)
{
for(j=0;j<=m-1;j++)
{
printf("a[%d][%d]",i+1,j+1);
scanf("%d",&a[i][j]);
}
}
printf("what u ve entered :\n");
for(i=0;i<=m-1;i++)
{
for(j=0;j<=m-1;j++)
{
printf("%d ",a[i][j]);
}
printf("\n");

}
printf("matrix in shorter order\n");
for(h=0;h<=m-1;h++)
{
for(i=0;i<=m-1;i++)
{
for(j=0;j<=m-1;j++)
{
b[i][j]=a[i][j];
}
}
x=m;
for(i=0;i<=x-1;i++)
{
for(j=0;j<=x-2;j++)
{
for(k=0;k<=x-1;k++)
{
b[j][k]=b[j+1][k];
}
}

for(j=0;j<=x-2;j++)
{
for(k=0;k<=x-2;k++)
{
if(k==h)
{
while(k<=x-2)
{
b[j][k]=b[j][k+1];
printf("%d ",b[j][k]);
k++;
}
}
else
{
printf("%d ",b[j][k]);
}
}
printf("\n");
}
printf("\n\n\n");
x--;
}

}

}
