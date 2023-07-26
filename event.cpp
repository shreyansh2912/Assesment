#include<iostream>
using namespace std;
int main ()
{
	int g,b,a;
	float c,d,e,f,h;
	string event,name;
//	char event[20];
	cout<<"**********Event management system**********"<<endl;
	cout<<"Enter the name of event"<<endl;
    getline(cin,event);
    //cout<<event;
    cout<<"Enter your name"<<endl;
    getline(cin,name);
    //cout<<name;
	cout<<"Enter the number of the guests"<<endl;
	cin>>a;
	cout<<"Enter the number of minute in the events"<<endl;
	cin>>b;
	cout<<"\n\n";
	
	cout<<"**********Event esimate for: "<<name<<"**********"<<endl;
   
	cout<<"Number of server: "<<(a+20)/20<<endl;
    c=((b/60)*18.50)+((b%60)*0.40);
    cout<<"The cost of servers: "<<c<<endl;
	d=a*20.70;  
    cout<<"The cost for food is: "<<d<<endl;
    e=d/a;
    cout<<"Average cost per person: "<<e<<endl;
    cout<<"\n\n"<<endl;
    f=(c*g)+d;
    cout<<"Total cost is: "<<f<<endl;
    cout<<"Please deposite a 25% deposite to reserve the event"<<endl;
    h=f*0.25;
    cout<<"The deposite needed is: "<<h<<endl;
 }