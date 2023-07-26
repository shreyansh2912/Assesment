#include<stdio.h>

int pizza()
{
	int quantity;
	{
		printf("you choose pizza\nenter your quantity \n");
		scanf("%d",&quantity);
		printf("Total amount:%d\n",quantity*180);
	}
}               
int burger()
{
	int quantity;
	{
		printf("you choose burger\nenter your quantity\n ");
		scanf("%d",&quantity);
		printf("Total amount:%d\n",quantity*200);
	}
}
int dhosa()
{
	int quantity;
	{
		printf("you choose dhosa\nenter your quantity\n ");
		scanf("%d",&quantity);
		printf("total amount:%d\n",quantity*120);
	}	
}
int manchurian()
{
	int quantity;
	{
		printf("you choose manchurian\nenter your quantity\n ");
		scanf("%d",&quantity);
		printf("Total amount:%d\n",quantity*100);
	}
}
int main()
{
	char cr='y';
	while(cr=='y')
	{	
		printf("--------MENU--------\n");
		printf("1.pizza---------180rs/pcs\n");
		printf("2.burger---------200rs/pcs\n");
		printf("3.dhosa----------120rs/pcs\n");
	    printf("4.manchurian------100rs/pcs\n");
	    printf("\n");
	    int choose;
	    printf("please enter your order....");
	    scanf("%d",&choose);
	
	   if(choose==1)
		{
			pizza();
	    }
		else if(choose==2)
		{
			burger();
		}
		else if (choose==3)
		{
			dhosa();
		}
		else if (choose==4)
		{
			manchurian();
		}
		else 
		{
			printf("enter valid order\n");
		}
		printf("do want to order more food? if yes than type 'y':\n");
         scanf(" %c",&cr);
        printf("\n\n");
}
}