#include<iostream>
#include<algorithm>
#include<list>
#include<stdio.h>
#include<vector>
int visited[100];
using namespace std;
int dfs(int g,list<int> *graph)
{
    list<int>::iterator it;
    int i;
    visited[g]=1;
    for(it=graph[g].begin();it!=graph[g].end();it++)
    {
        if(!visited[*it])
        {
            dfs(*it,graph);
        }
    }



}
int main()
{
int n,i,j,no,no1;
cout<<"check whether graph is connected or not\n";
cout<<"Enter the no of vertex\n";
cin>>n;
list<int> graph[n];
cout<<"enter the values";
for(i=0;i<n;i++)
{
    cout<<"Enter the no of vertex to which vertex "<<i+1<<" is connected";
    cin>>no;
    for(j=0;j<no;j++)
    {
        cin>>no1;
        graph[i].push_back(no1);
    }
}
dfs(0,graph);
int count=0;
for(i=0;i<n;i++)
{
    if(visited[i]==1)
        count++;
}
if(count==n)
    cout<<"The graph is connected\n";
else
    cout<<"The graph is not connected\n";
return 0;
}
