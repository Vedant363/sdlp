
def print_reverse_name
    print "Enter your first name: "
    first_name = gets.chomp
    f_n = first_name
  
    print "Enter your last name: "
    last_name = gets.chomp
    l_n = last_name
  
    puts "#{last_name} #{first_name}"

    r_first_name = first_name.reverse
    r_last_name = last_name.reverse

    puts "#{r_first_name} #{r_last_name}"
end

  
print_reverse_name
  