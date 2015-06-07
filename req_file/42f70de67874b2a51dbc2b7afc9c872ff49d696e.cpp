#include<iostream>
#include<stdio.h>
#include<stdlib.h>
using namespace std;

/* A binary tree node has data, pointer to left child
   and a pointer to right child */
struct node
{
    int data;
    struct node* left;
    struct node* right;
};

/* Compute the "maxDepth" of a tree -- the number of
    nodes along the longest path from the root node
    down to the farthest leaf node.*/
int maxLeft(struct node * root)
{
    if(root->right)
        maxLeft(root->right);
    else
        return root->data;
}
int maxRight(struct node * root)
{
   if(root->left)
        maxRight(root->left);
    else
        return root->data;
}
int bstCheck(struct node * root)
{

    if(root==NULL)
    {
        return 0;

    }
    int left,right;
    left = (root->left)?maxLeft(root->left):(root->data)-1;
    right = (root->right)?maxRight(root->right):(root->data)+1;
    int l1,r1;
    l1=(root->left)?root->left->data:(root->data)-1;
    r1=(root->right)?root->right->data:(root->data)+1;

        if((root->data < left) || (root->data > right) || (root->data < l1) || (root->data > r1))
        {
            return 1;
        }
        if(bstCheck(root->left) || bstCheck(root->right))
        {
            return 1;
        }
        else
        {
            return 0;
        }

}

/* Helper function that allocates a new node with the
   given data and NULL left and right pointers. */
struct node* newNode(int data)
{
    struct node* node = (struct node*)
                                malloc(sizeof(struct node));
    node->data = data;
    node->left = NULL;
    node->right = NULL;

    return(node);
}

int main()
{
    struct node *root = newNode(10);

    root->left = newNode(5);
    root->right = newNode(20);
    root->left->left = newNode(3);
    root->left->right = newNode(8);
    root->left->right->left = newNode(7);
    root->left->right->right = newNode(11);
    if(bstCheck(root)==1)
    {
        cout<<"this is not a binary search tree";
    }
    else
    {
        cout<<"this is a binary tree";
    }


    getchar();
    return 0;
}
