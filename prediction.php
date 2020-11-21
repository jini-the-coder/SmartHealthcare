<% for i in range(10): %>
    <% if i % 2: %>
        <td class="odd"><%= i %></td>
        <% end %>
    <% else: %>
        <td class="even"><%= i %></td>
        <% end %>
    <% end %>