#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
void main()
{


    int n,i,j;
    scanf("%d",&n);
    for(j=1;j<=n;j++)
    {



        for(i=10;i>=0;i--)
        {
            if(j&(1<<i))
            {
                printf("1 '%d'",i);
            }



        }
            printf("\n");
    }



}
