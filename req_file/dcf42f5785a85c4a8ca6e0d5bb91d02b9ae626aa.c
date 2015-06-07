#include<stdio.h>
void function(int ,int);
int arr[50];
int main()
{
    while(1)
    {
        int k,i,j,temp;
        scanf("%d",&k);
        if(k==0)
            break;
        for(i=0;i<k;i++)
        {
            scanf("%d",&arr[i]);
        }

        for(i=0;i<k-5;i++)
        {
            //for(temp=i;temp<=i+5;temp++)
                //printf("%d ",arr[temp]);
            function(i,k);
        }
    }
    return 0;
}
void function(int i,int h)
{
    int k,m,l,j,d,temp;
    k=i+5;
    m=k;
   // d=k;


   printf("\n");
    for(;m>i;m--)
    {
        for(d=k+1;d<h;d++)
        {
            for(l=i;l<=k;l++)
            {
                if(l==m)
                    continue;
                else
                    printf("%d ",arr[l]);

            }
            printf("%d ",arr[d]);
            printf("\n");
        }
    }
}

