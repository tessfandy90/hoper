#include <vector>
#include <algorithm>
#include <fstream>

int main(){
    std::ifstream fin("input.txt");
    std::ofstream fout("output.txt");

    std::vector<int> v;

    std::copy(std::istream_iterator<int>(fin), 
        std::istream_iterator<int>(),
        std::inserter(v, v.end()));
    std::sort(v.begin(), v.end());
    std::copy(v.begin(), 
        v.end(), 
        std::ostream_iterator<int>(fout, " "));
    return 0;
}
