#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if( (n & 1) == 0 ){ /* ()がないと、1==0となってfalseであるから出力が実行されない */
    printf("%d は偶数です\n", n);
  }
  return 0;
}
